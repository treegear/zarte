<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id('m_id'); 
            $table->string('m_name');
            $table->string('m_slug');
            $table->string('metta_title');
            $table->longtext('metta_desc');
            $table->longtext('metta_keywords');
            
            $table->string('m_banner_img'); 
            $table->string('m_banner_img_path'); 
            $table->longtext('m_desc');
            
            $table->tinyInteger('is_active')->default(1);
            
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
        Schema::dropIfExists('menus');
    }
}
