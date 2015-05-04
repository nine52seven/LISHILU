<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 100)->nullable();
            $table->string('email', 100)->unique();
            $table->string('password', 60);
            $table->boolean('sex')->default(0);
            $table->string('tel', 20)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->tinyInteger('active', 2)->default(0);
            $table->text('description')->nullable();
            $table->rememberToken();
            $table->string('activationcode', 100)->nullable();
            $table->timestamp('actived_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('dept', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->integer('company_id');
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('user_dept', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('dept_id');
            $table->timestamps();
        });
        Schema::create('company', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('address');
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
        //
    }

}
