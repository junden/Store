<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoodOrder extends Model {

    protected $fillable = ['goods_id', 'orders_id', 'amount'];
    /**
     * 
     */
    public function good() {
        return $this->belongsTo('App\Good');
    }

    public function order() {
        return $this->belongsTo('App\Order');
    }

}
