<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $fillable = ['name','adress','phone','comment'];
    
    public function goodorder() {
        return $this->hasMany('App\GoodOrder');
    }

}
