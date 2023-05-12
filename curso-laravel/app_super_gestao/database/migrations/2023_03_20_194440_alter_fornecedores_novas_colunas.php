<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->string('uf', 2);
            $table->string('email', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            // Para remover colunas
            // $table->dropColumn('uf'); // Remove as colunas de uma em uma
            // $table->dropColumn('email'); // Remove as colunas de uma em uma
            $table->dropColumn(['uf', 'email']); // Recebe um array de colunas que devem ser removidas
        });
    }
}
