<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model {

    protected $fillable = [
        'name', 'parent_id', 'type_id'
    ];

    public function employees(){
        return $this->belongsToMany('App\Employee');
    }

    public function type(){
        return $this->belongsTo('App\Type');
    }

}
