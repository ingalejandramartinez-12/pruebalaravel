<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [ 'name', 'email','imagen','sitio_web'];

}
