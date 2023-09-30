<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDelete extends Model
{
    use HasFactory;
    protected $table = 'product_deletes';

    protected $fillable = [
        'product_id',
        'product_code',
        'del_unit',
    ];

    public function product()
    {
        return $this->belongsTo(ProductData::class);
    }

    public function __toString()
    {
        return $this->product;
    }
}
