<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id('te_id');
            $table->string('te_title');
            $table->longtext('te_desc'); 

            $table->string('te_img');   
            $table->string('te_name');   
            $table->string('te_desigination');   

            $table->tinyInteger('te_is_active')->default(1);
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
        Schema::dropIfExists('testimonials');
    }
}
