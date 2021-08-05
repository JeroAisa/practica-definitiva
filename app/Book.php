<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /*Un libro le pertenece a un autor*/

    public function user(){

        return $this->belongsTo(User::class);

    }
}
