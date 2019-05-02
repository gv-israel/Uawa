<?php

namespace Uawa;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    //
    protected $table='preguntas_respuestas';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable = [
    	'pregunta',
    	'respuesta',
    	'categoria',
    ];
}
