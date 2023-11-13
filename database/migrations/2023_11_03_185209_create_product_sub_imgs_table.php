<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSubImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sub_imgs', function (Blueprint $table) {
            $table->id('psi_id');
            $table->integer('psi_pro_id')->comment('product id'); 
            
            $table->string('psi_img');
            $table->tinyInteger('psi_is_active')->default(1);

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
        Schema::dropIfExists('product_sub_imgs');
    }
}
