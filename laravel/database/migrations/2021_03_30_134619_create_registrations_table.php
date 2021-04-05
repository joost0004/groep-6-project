<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('voorletters');
            $table->string('voornaam');
            $table->string('geslacht');
            $table->string('adres');
            $table->string('postcode');
            $table->string('gemeente');
            $table->string('regio');
            $table->string('verwijzer');
            $table->boolean('partner')->default(false)->nullable();
            $table->decimal('kind')->nullable();
            $table->boolean('linnen')->nullable();
            $table->boolean('speelgoed')->nullable();
            $table->boolean('volwassen')->nullable();
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
        Schema::dropIfExists('registrations');
    }
}
