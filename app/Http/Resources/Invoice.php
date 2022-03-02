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
        return [
            'invoice_id' => $this->invoice_id,
            'customerName' => $this->customerName,
            'phone' => $this->phone,
            'email' => $this->email,
            'city' => $this->city,
            'district' => $this->district,
            'ward' => $this->ward,
            'address' => $this->address,
            'note' => $this->note,
            'total_invoice' => $this->total_invoice,
            'products' => $this->products
        ];
    }

    public static function setInvoice($request)
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
