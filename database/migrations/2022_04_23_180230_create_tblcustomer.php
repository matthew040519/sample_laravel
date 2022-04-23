<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblcustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcustomer', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('age');
            $table->string('address');
            $table->string('gender');
            $table->integer('active')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblcustomer');
    }
}
