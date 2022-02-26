<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Invoice as ResourcesInvoice;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Size;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Invoice::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $invoice = ResourcesInvoice::getInvoice($request);

            Invoice::create($invoice);

            $lastestInvoice = Invoice::where('phone', $request->phone)->orderBy('invoice_id', 'desc')->first();
            $products = $request->products;
            foreach ($products as $product) {
                $detail = new InvoiceDetail();
                $detail->invoice_id = $lastestInvoice->invoice_id;
                $detail->product_id = $product['id'];
                $detail->quantity = $product['quantity'];
                $detail->size = $product['size'];
                $detail->total = $product['total'];
                $detail->save();

                // Lay ra size id
                $size = Size::where('name', $product['size'])->first();
                // Lay ra so luong product co size do trong kho
                $productSize = ProductDetail::where('product_id', $product['id'])->where('size_id', $size->size_id)->first();
                // SL moi se bang SL cu (tim duoc o tren) - SL mua
                $newStockQuantity = $productSize->quantity - $product['quantity'];
                // Cap nhat lai SL moi
                Product::find($product['id'])->sizes()->updateExistingPivot($size->size_id, ['quantity' => $newStockQuantity]);
            }

            DB::commit();

            return response()->json(
                [
                    'message' => 'Đặt hàng thành công. Cảm ơn bạn đã mua sắm tại cửa hàng của chúng tôi.'
                ],
                201
            );
        } catch (Exception $e) {
            DB::rollBack();

            return response()->json(
                [
                    'message' => 'Đặt hàng thất bại. Vui lòng thử lại.'
                ],
                500
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
