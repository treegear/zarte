<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) { 
            $table->id('pro_id');
            $table->integer('pro_pc_id')->comment('product category id');
            $table->string('pro_slug');
            $table->string('pro_metta_title');
            $table->longtext('pro_metta_desc');
            $table->longtext('pro_metta_keywords');
            $table->string('pro_title');
            $table->longtext('pro_desc');
            $table->string('pro_img');
            $table->string('pro_price'); 
            $table->string('pro_s_price'); 
            $table->longtext('pro_features');
            $table->tinyInteger('pro_is_active')->default(1);
            
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->integer('deleted_by');

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
        Schema::dropIfExists('products');
    }
}
