<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direcciones';

    protected $fillable = ['user_id','nombrecompleto','calle','localidad','provincia','codigo_postal','telefono','default'];    
    
    public $timestamps = true; 

    public function isDefault()
    {
        return $this->default; 
    }

    
}
