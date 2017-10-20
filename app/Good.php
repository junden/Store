<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model {

    protected $fillable = ['name', 'price', 'image', 'description'];

    /**
     * Получить категорию к которой относится данный товар
     */
    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function goodorder() {
        return $this->hasMany('App\GoodOrder');
    }
    
}
