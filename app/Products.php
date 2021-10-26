<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table='productos';
    public $timestamps=false;
    protected $fillable=[
        'id', 'nombre','email','producto','telefono'
    ];

    protected $primaryKey='id';
}
