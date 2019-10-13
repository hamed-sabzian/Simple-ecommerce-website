<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionValueVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_value_variants', function (Blueprint $table) {
            $table->unsignedBigInteger('product_variant_id');
            $table->unsignedTinyInteger('option_value_id');
            $table->foreign('product_variant_id')->references('id')->on('product_variants')->onDelete('cascade');
            $table->foreign('option_value_id')->references('id')->on('option_values')->onDelete('cascade');
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
        Schema::dropIfExists('option_value_variants');
    }
}
