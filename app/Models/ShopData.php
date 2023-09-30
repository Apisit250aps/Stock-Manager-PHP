<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopData extends Model
{
    use HasFactory;
    protected $table = 'shop_data';

    protected $fillable = [
        'user_id',
        'user_status',
        'shop_code',
        'shop_name',
        'shop_product_type_id',
        'shop_contact',
        'shop_post_code',
        'shop_province',
        'shop_district',
        'shop_subdistrict',
        'shop_detail_address',
        'shop_area_code_id',
        'shop_tel',
        'shop_fax',
        'shop_email',
        'shop_remark',
        'shop_latitude',
        'shop_longitude',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shopProductType()
    {
        return $this->belongsTo(ProductTypeData::class);
    }

    public function shopAreaCode()
    {
        return $this->belongsTo(AreaData::class);
    }

    public function __toString()
    {
        return $this->shop_code . ' ' . $this->shop_name;
    }
}
