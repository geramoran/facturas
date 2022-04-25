<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->decimal('precio', $precision = 8, $scale = 2);
            $table->integer('impuesto');
            $table->timestamps();
        });


        DB::table('productos')->insert([
            [
                'nombre' => 'Producto 1',
                'precio' => '123.45',
                'impuesto' => '5',
            ],
            [
                'nombre' => 'Producto 2',
                'precio' => '45.65',
                'impuesto' => '15',
            ],
            [
                'nombre' => 'Producto 3',
                'precio' => '39.73',
                'impuesto' => '12',
            ],
            [
                'nombre' => 'Producto 4',
                'precio' => '250.00',
                'impuesto' => '8',
            ],
            [
                'nombre' => 'Producto 5',
                'precio' => '59.35',
                'impuesto' => '10',
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
