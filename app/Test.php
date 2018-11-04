<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = "tests";

	protected $fillable = ['pregunta','opcion_1','opcion_2','opcion_3','respuesta','categoria'];
}
