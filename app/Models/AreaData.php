<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaData extends Model
{
    use HasFactory;
    protected $table = 'area_data';

    protected $fillable = [
        'area_name',
    ];

    public function __toString()
    {
        return $this->area_name;
    }
}
