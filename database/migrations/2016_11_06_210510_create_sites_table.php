<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('token')->index();
            $table->string('name');
            $table->string('url');
            $table->string('country');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->date('start_date');
            $table->date('finish_date');
            $table->string('status');
            $table->string('company_registration_code');
            $table->enum('payment_month',['yes','no', 'on_process'])->default('no');
            
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
        Schema::dropIfExists('sites');
    }
}
