<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    //
    protected $table = "Categorys";

    public function product() {
        return $this->hasMany('App\Models\Products', 'idCategory', 'id');
    }
}
