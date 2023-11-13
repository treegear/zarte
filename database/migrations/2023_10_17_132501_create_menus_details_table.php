<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus_details', function (Blueprint $table) {
            $table->increments('md_id');
            $table->integer('md_m_id')->comment('menu id'); 
            
            $table->string('md_title'); 
            $table->string('md_sub_title'); 
            $table->longtext('md_desc'); 
            $table->string('md_content1')->comment('name');
            $table->string('md_content2')->comment('desigination');
            
            $table->string('md_img_1'); 
            $table->string('md_img_path_1'); 

            $table->string('md_img_2'); 
            $table->string('md_img_path_2'); 

            $table->longtext('md_desc_2'); 


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
        Schema::dropIfExists('menus_details');
    }
}
