<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('state',100);
            $table->string('city',100);
            $table->string('streetName',100);
            $table->string('buildingNumber',100);
            $table->string('postcode',100);
            $table->string('PhoneNumber',100);
            $table->float('latitude');
            $table->float('longitude');
            //$table->enum('eleves', ['filles', 'garçons','séparer','mixte']);
            //$table->string('directeure',50);
            $table->integer('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('categorys');
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
        Schema::dropIfExists('etablissements');
    }
}
