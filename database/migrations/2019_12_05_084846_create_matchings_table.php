<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('matchings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger('offreService_id');
            $table->foreign('offreService_id')
                ->references('id')
                ->on('offreServices')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->unsignedBigInteger('demandeService_id');
            $table->foreign('demandeService_id')
                ->references('id')
                ->on('demandeServices')
                ->onDelete('restrict')
                ->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matchings');
    }
}
