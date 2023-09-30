<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutputData extends Model
{
    use HasFactory;
    protected $table = 'output_data';

    protected $fillable = [
        'invoice_id',
        'invoice_no',
        'product_id',
        'quantity',
        'sale_price',
        'discount',
    ];

    public function invoice()
    {
        return $this->belongsTo(OutputInvoice::class);
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
