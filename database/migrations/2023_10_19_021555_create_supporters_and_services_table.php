<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportersAndServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supporters_and_services', function (Blueprint $table) {
            $table->id('ss_id'); 
            $table->enum('ss_type', ['companies', 'members', 'services'])->default('companies');
            
            
            $table->string('ss_name');  
            $table->longtext('ss_desc'); 
            $table->string('ss_img_1'); 
            $table->string('ss_img_path_1');
            $table->string('ss_website')->comment('website')->nullable();
            $table->string('ss_facebook')->comment('facebook')->nullable();
            $table->string('ss_twitter')->comment('twitter')->nullable();
            $table->string('ss_linkedin')->comment('linkedin')->nullable();
            
            $table->tinyInteger('ss_is_active')->default(1);

            
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
        Schema::dropIfExists('supporters_and_services');
    }
}
