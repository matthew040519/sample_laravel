<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    //

    public $timestamps = false;
    protected $table = 'tblproducts';
    protected $primaryKey = 'product_id';
    protected $fillable = ['product_image', 'product_name', 'product_price'];
}
