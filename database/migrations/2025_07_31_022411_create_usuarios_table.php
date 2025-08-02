<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('usuarios', function (Blueprint $table) {
        $table->id();
        $table->string('nombre', 20);
        $table->string('apellidos', 40);
        $table->string('correo', 20)->unique();
        $table->string('contrasena', 15); // Solo si se requiere guardar plano
        $table->string('password_hash', 255);
        $table->string('token', 255);
        $table->integer('noches');
        $table->date('f_ingreso')->nullable();
        $table->date('f_salida')->nullable();
        $table->timestamp('f_registro')->useCurrent()->useCurrentOnUpdate();
    });
}
};