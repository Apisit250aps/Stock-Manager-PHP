<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutputInvoice extends Model
{
    use HasFactory;
    protected $table = 'output_invoices';

    protected $fillable = [
        'invoice_no',
        'customer_id',
        'total_price',
        'discount',
        'remark',
    ];

    public function customer()
    {
        return $this->belongsTo(CustomerData::class);
    }

    public function __toString()
    {
        return $this->invoice_no;
    }
}
