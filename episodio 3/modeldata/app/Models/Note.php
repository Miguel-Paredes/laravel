<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    
    // * Asignar la tabla de la informacion en caso de no respetar la nomenclatura
    protected $table = "notes";
    // ! Si se declara los fillable no es necesario declarar los guarded
    // * Indicar en que campos se puede hacer CRUD
    protected $fillable = [
        'title',
        'description',
        'deadline',
        'done'
    ];
    // ! Si se declara los guarded no es necesario declarar los fillable
    // * Indicar que campos no se puede realizar modificaciones
    protected $guarded = [
        'id',
        'timestamps'
    ];
    // * Verifica la forma en la que se reciben los datos
    protected $casts = [
        "deadline" => "date"
    ];
    // * Evita que se tengan que enviar todos los campos de un modelo
    // * Un ejemplo al momento de enviar la lista de usuarios no envia el campo de la contraseña
    protected $hidden = ['password'];

}

/*
    // ! Creamos una nueva instancia como en mongoDB
    $note = new Note();
    // ! Asignamos informacion al modelo
    $note->title="Hello world";
    // ! Guardamos como en mongoDB
    $note->save();

    // ? Realizamos una busqueda con los metodos http
    Note::get();

*/