<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    // protected $fillable = ['idCategory', 'idSize', 'name', 'desc', 'gender', 'quantity', 'unitPrice', 'image'];
    protected $table = "Products";
    
    public function category() {
        return $this->belongsTo('App\Models\Categorys', 'idCategory', 'id');
    }

    public function billDetail() {
        return $this->hasMany('App\Models\BillDetail', 'idProduct', 'id');
    }
}
