<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorarioMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario_materias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('horario_id')->constrained();//->nullable()->constrained()->onDelete('SET NULL');***
            $table->foreignId('materia_id')->constrained();
            $table->string('dia', 100)->nullable()->default('No definido');
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('curso_id')->nullable()->constrained();
            //->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horario_materias');
    }
}
