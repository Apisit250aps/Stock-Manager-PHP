<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputData extends Model
{
    use HasFactory;
    protected $table = 'input_data';

    protected $fillable = [
        'invoice_id',
        'invoice_no',
        'product_id',
        'quantity',
        'unit_price',
        'unit_cost',
        'discount',
    ];

    public function invoice()
    {
        return $this->belongsTo(InputInvoice::class);
    }

    public function product()
    {
        return $this->belongsTo(ProductData::class);
    }

    public function __toString()
    {
        return $this->invoice_no;
    }
}
