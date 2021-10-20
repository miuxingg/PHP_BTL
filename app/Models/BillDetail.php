<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    //
    protected $table = "BillDetail";
    public function product() {
        return $this->belongsTo('App\Models\Products', 'idProduct', 'id');
    }
    public function bill() {
        return $this->belongsTo('App\Models\Bills', 'idBill', 'id');
    }
}
