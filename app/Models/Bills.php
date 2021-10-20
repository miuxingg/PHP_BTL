<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    //
    protected $table = "Bills";
    public function billDetail() {
        return $this->hasMany('App\Models\BillDetail', 'idBill', 'id');
    }
    public function user() {
        return $this->belongsTo('App\User', 'idCustomer', 'id');
    }
}
