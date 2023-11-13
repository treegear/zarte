<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersAndSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners_and_sliders', function (Blueprint $table) {
            $table->id('ps_id');             
            
            $table->string('ps_name');   
            $table->string('ps_sub_text');   
            $table->enum('ps_type', ['slider', 'partners'])->default('slider');

            $table->string('ps_img_1'); 
            $table->string('ps_img_path_1'); 
            
            $table->tinyInteger('ps_is_active')->default(1);

            
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
        Schema::dropIfExists('partners_and_sliders');
    }
}
