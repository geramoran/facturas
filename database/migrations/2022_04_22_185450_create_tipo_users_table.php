<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdUser');
            $table->string('Tipo');
            $table->timestamps();
        });

        Schema::table('tipo_users', function($table) {
            $table->foreign('IdUser')->references('id')->on('users');
        });

        DB::table('tipo_users')->insert(
            [
                'IdUser' => '1',
                'Tipo' => 'Administrador',
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_users');
    }
}
