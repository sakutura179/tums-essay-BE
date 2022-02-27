<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category as ResourcesCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Category::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = ResourcesCategory::getCategory($request);
        Category::create($category);
        return response()->json([
            'message' => 'Create category success'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if (!is_null($category)) {
            $data = ResourcesCategory::getCategory($request);
            if ($category->update($data))
                return response()->json([
                    'message' => 'Update category success'
                ], 200);
            else
                return response()->json([
                    'message' => 'Update category failed'
                ], 400);
        }

        return response()->json([
            'message' => 'Category not found'
        ], 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if (!is_null($category))
            if ($category->delete())
                return response()->json([
                    'message' => 'Delete category success'
                ], 200);
            else
                return response()->json([
                    'message' => 'Delete category failed'
                ], 400);

        return response()->json([
            'message' => 'Category not found'
        ], 400);
    }
}
