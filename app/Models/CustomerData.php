<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerData extends Model
{
    use HasFactory;
    protected $table = 'customer_data';

    protected $fillable = [
        'user_id',
        'user_status',
        'customer_code',
        'customer_name',
        'customer_post_code',
        'customer_province',
        'customer_district',
        'customer_subdistrict',
        'customer_detail_address',
        'customer_tel',
        'customer_fax',
        'customer_email',
        'customer_remark',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function __toString()
    {
        return $this->customer_code . ' ' . $this->customer_name;
    }
}
