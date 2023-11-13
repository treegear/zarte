<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id('s_id');
            $table->string('s_admin_logo');   
            $table->string('s_admin_name');   
            $table->string('s_site_logo');   
            $table->string('s_site_name');   
            $table->string('s_site_address');   
            $table->string('s_site_contact');   
            $table->tinyInteger('s_is_active')->default(1);

            
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
        Schema::dropIfExists('settings');
    }
}
