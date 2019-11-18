<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffreServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('offre_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('objet_offre', 50);
            $table->text('contenu_offre', 300);

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            
            $table->unsignedBigInteger('localisation_id');
            $table->foreign('localisation_id')
                ->references('id')
                ->on('localisations')
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
        Schema::dropIfExists('offre_services');
    }
}
