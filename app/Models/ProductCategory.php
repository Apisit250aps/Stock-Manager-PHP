<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $table = 'product_categories';

    protected $fillable = [
        'product_type_id',
        'category',
    ];

    public function productType()
    {
        return $this->belongsTo(ProductTypeData::class);
    }

    public function __toString()
    {
        return $this->category;
    }
}
