<?php

namespace Modules\Booking\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class OrderResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'phone' => $this->phone,
            'email' => $this->email,
            'ship_id' => $this->ship_id,
            'payment_id' => $this->payment_id,
            'address' => $this->address,
            'note' => $this->note,
            'total' => $this->total,
            'discount' => $this->discount,
            'status'=>$this->status,
            'user_id'=> $this->user_id,
            'detail' => $this->detail()->get()
        ];
    }
}