<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputInvoice extends Model
{
    use HasFactory;
    protected $table = 'input_invoices';

    protected $fillable = [
        'invoice_no',
        'shop_id',
        'total_price',
        'total_cost',
        'total_discount',
        'remark',
    ];

    public function shop()
    {
        return $this->belongsTo(ShopData::class);
    }

    public function __toString()
    {
        return $this->invoice_no;
    }
}
