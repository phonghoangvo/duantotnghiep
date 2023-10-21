<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;
    protected $table ='product';
    protected $primaryKey='id';
    protected $dates=['ngayDang'];
    protected $fillable=[
        'name',
        'img',
        'price',
        'price-sale',
        'mo-ta',
        'hot',
        'hidden',
        'id_category',
        'tom_tat',
        'ngayDang',
    ];

    
}
