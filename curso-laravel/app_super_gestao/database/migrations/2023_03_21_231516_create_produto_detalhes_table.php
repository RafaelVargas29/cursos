<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoDetalhesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_detalhes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id');
            $table->float('comprimento', 8, 2);
            $table->float('largura', 8, 2);
            $table->float('altura', 8, 2);
            $table->timestamps();

            //constraint de relacionamento (chave estrangeira)(assegura que o valores que são colocados na coluna  $table->unsignedBigInteger('produto_id'); existem na tabela produtos)
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->unique('produto_id'); // Garante que nessa coluna não seja possível a inclusão de valores repetidos
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_detalhes');
    }
}
