<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product as ResourcesProduct;
use App\Models\Image;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();

        return ResourcesProduct::collection($product);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'unique:products,name'
            ],
            [
                'name.unique' => 'Product name is already exists'
            ]
        );
        DB::beginTransaction();
        try {
            $product = ResourcesProduct::getProduct($request);
            Product::create($product);

            // Add size and image
            $product_id = Product::where('name', $request->name)->first()->product_id;

            // Add $reques->size to product_details table
            $sizes = $request->size;
            foreach ($sizes as $size) {
                $data = [
                    'product_id' => $product_id,
                    'size_id' => $size,
                    'quantity' => 30
                ];
                ProductDetail::create($data);
            }
            // Add $request->image to images table
            $images = $request->images;
            // return dd($images);
            foreach ($images as $image) {
                $imgPath = 'upload/';
                $imgName = $image->getClientOriginalName();
                // upload image to server
                $image->move($imgPath, $imgName);
                // add image to images table
                $data = [
                    'product_id' => $product_id,
                    'path' => $imgPath . $imgName
                ];
                Image::create($data);
            }

            DB::commit();
            return response()->json([
                'message' => 'Create product successfully',
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tmp = Product::find($id);
        if (strtolower($tmp->name) != strtolower($request->name))
            $this->validate(
                $request,
                [
                    'name' => 'unique:products,name'
                ],
                [
                    'name.unique' => 'Product name is already exists'
                ]
            );

        DB::beginTransaction();
        try {
            $product = ResourcesProduct::getProduct($request);
            Product::find($id)->update($product);

            // Add $reques->size to product_details table
            $updatedProduct = Product::find($id);
            // Size Collection trong DB
            $dbSizesCollection = ProductDetail::where('product_id', $id)->get();
            // Chi la ra size_id
            $dbSizes = [];
            foreach ($dbSizesCollection as $dbSizeCollection)
                array_push($dbSizes, $dbSizeCollection->size_id);

            // Size moi
            $sizes = $request->size;
            foreach ($dbSizesCollection as $dbSizeCollection) {
                if (!in_array($dbSizeCollection->size_id, $sizes))
                    $updatedProduct->sizes()->detach($dbSizeCollection->size_id);
            }

            foreach ($sizes as $size) {
                if (!in_array($size, $dbSizes)) {
                    $data = [
                        'product_id' => $id,
                        'size_id' => $size,
                        'quantity' => 30
                    ];
                    ProductDetail::create($data);
                }
            }
            // Add $request->image to images table
            //Delete image in database
            $dbImages = Image::where('product_id', $id)->get();
            foreach ($dbImages as $dbImage) {
                $dbImage->delete();
            }
            // Add new images
            $images = $request->images;

            foreach ($images as $image) {
                $imgPath = 'upload/';
                $imgName = $image->getClientOriginalName();
                // upload image to server
                $image->move($imgPath, $imgName);
                // add image to images table
                $data = [
                    'product_id' => $id,
                    'path' => $imgPath . $imgName
                ];
                Image::create($data);
            }

            DB::commit();
            return response()->json([
                'message' => 'Update product successfully',
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!is_null($product))
            if ($product->delete())
                return response()->json([
                    'message' => 'Delete product success'
                ], 200);
            else
                return response()->json([
                    'message' => 'Delete product failed'
                ], 400);

        return response()->json([
            'message' => 'Product not found'
        ], 400);
    }
}
