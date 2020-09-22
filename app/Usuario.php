<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
       //hay que modificar el id sino asume que la llave principal se llama ID

	protected $primaryKey = 'id';

	protected $fillable=['id','name','lastname','country','phone','email'];

}
