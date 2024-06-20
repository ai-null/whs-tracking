<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_customer', function (Blueprint $table) {
            $table->id();
            $table->string('Bill_of_lading');
            $table->string('Consignee');
            $table->string('Status');
            $table->string('Report_condition');
            $table->string('id_container');
            $table->date('date');
            $table->integer('Quantity');
            $table->integer('Volume');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_customer');
    }
};
