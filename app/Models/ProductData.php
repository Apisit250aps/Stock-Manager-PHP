<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductData extends Model
{
    use HasFactory;
    protected $table = 'product_data';

    protected $fillable = [
        'product_code',
        'product_name',
        'product_price',
        'product_desc',
        'product_unit',
        'product_cost',
        'product_category_id',
    ];

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function __toString()
    {
        return $this->product_code . ' ' . $this->product_name;
    }
}
