<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->text('texte');
            $table->string('email');
            $table->timestamps();
            
            $table->unsignedBigInteger('offreService_id')->nullable();
            $table->foreign('offreService_id')
                ->references('id')
                ->on('offre_services')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('demandeService_id')->nullable();
            $table->foreign('demandeService_id')
                ->references('id')
                ->on('demande_services')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
