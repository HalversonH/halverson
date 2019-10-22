<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('inventarios', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('valor_original', 5, 2);
            $table->decimal('valor_residual', 5, 2);
            $table->integer('vida_util');
            $table->float('percentual_da_atividade', 8, 2);
            $table->decimal('depreciacao_anual', 5, 2);
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
        Schema::dropIfExists('inventarios');  //
    }
}
