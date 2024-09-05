<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('notes',function (Blueprint $table){
            // ! Dato fecha
            // $table->date('deadline');
            // ! Dato String
            // $table->string('title',255);
            // ! Dato String
            // $table->string('description',255)->nullable(); // ? nullable permite que se envie el campo en nulo
            // ! Dato booleano
            // $table->boolean('done')->default(false); // ? default   hace que los valores esten por defecto
            // ! Dato numerico
            $table->integer('example');
            // ! Dato numerico positivo
            $table->unsignedInteger('example'); // Solo se pueden colocar numeros positivos
            // ! Dato numerico de mayor tamaño
            $table->bigInteger('example');
            // ! Dato numerico positivo de mayor tamaño
            $table->unsignedBigInteger('example'); // Solo se pueden colocar numeros positivos
            // ! Dato String de mayor tamaño
            $table->text('example'); // Permite ingresar textos
            // ! Dato Float
            $table->float('example');
            // ! Dato Double
            $table->double('example');
            // ! Dato Enumerado
            $table->enum('state',['DRAFT','PUBLISHED','DELETED']);

            // * Agregamos la nueva informacion
            $table->string('author',255);
            // * Eliminar una columna
            $table->dropColumn(['deadline']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumn(['author']); 
    }
};
