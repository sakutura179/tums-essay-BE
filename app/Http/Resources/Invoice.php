<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Invoice extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return 123;
    }

    public static function getInvoice($request)
    {
        return [
            'customerName' => $request->customerName,
            'phone' => $request->phone,
            'email' => $request->email,
            'city' => $request->city,
            'district' => $request->district,
            'ward' => $request->ward,
            'address' => $request->address,
            'note' => $request->note,
            'total_invoice' => $request->total_invoice
        ];
    }
}
