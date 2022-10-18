<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->integer('loancategory_id');
            $table->string('name');
            $table->string('national_id');
            $table->string('fathers_name');
            $table->string('photo')->nullable();
            $table->string('address')->nullable();
            $table->string('granter1_photo')->nullable();
            $table->string('granter2_photo')->nullable();
            $table->string('electricity_photo')->nullable();
            $table->string('office_id_photo')->nullable();
            $table->string('bank_statement')->nullable();
            $table->string('tax_statement')->nullable();
            $table->integer('amount');
            $table->string('document')->nullable();
            $table->integer('user_id');
            $table->integer('status')->default(0);

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
        Schema::dropIfExists('loans');
    }
};
