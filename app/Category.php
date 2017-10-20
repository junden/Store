<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
protected $fillable = ['name'];
    /**
     * Получить все товары категории.
     */
    public function goods() {
        return $this->hasMany('App\Good');
    }

}
