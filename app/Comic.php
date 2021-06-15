<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    /**
     * MASS ASSIGN. (FILLABLE) 
     */
     protected $fillable = [
         // specificare colonne da prendere per create & update (non ha assegnazioni per il token e metodi di default)
         'title',
         'description',
         'price', 
         'series',
         'sale_date',
         'type',
         'thumb',
     ];
}
