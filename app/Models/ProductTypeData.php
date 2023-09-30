<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTypeData extends Model
{
    use HasFactory;
    protected $table = 'product_type_data';

    protected $fillable = [
        'type_code',
        'type_name',
    ];

    public function __toString()
    {
        return $this->type_name;
    }
}
