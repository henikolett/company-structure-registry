<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model {

    protected $fillable = [
        'name', 'parent_id', 'type_id'
    ];

}
