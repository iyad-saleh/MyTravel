<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMycompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mycompanies', function (Blueprint $table) {
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('logo');
            $table->string('telephone1')->nullable();
            $table->string('telephone2')->nullable();
            $table->string('address')->nullable();
            $table->string('support')->nullable();
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
        Schema::dropIfExists('mycompanies');
    }
}
