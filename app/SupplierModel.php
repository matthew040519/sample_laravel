<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    //

    public $timestamps = false;
    protected $table = 'tblsupplier';
    protected $primaryKey = 'supplier_id';
    protected $fillable = ['supplier_name', 'address'];
}
