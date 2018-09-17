<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('birthdateplace');
            $table->string('gender');
            $table->text('address');
            $table->string('phonenumber');
            $table->string('maritalstatus');
            $table->string('suku');
            $table->string('pekerjaan');
            $table->string('photo');
            $table->string('email')->unique();
            $table->string('idparrentrelation');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personals');
    }
}
