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
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('username', 100)->unique();
            $table->string('name', 100)->nullable();
            $table->string('email', 100)->unique();
            $table->string('password', 60);
            $table->boolean('sex')->default(0);
            $table->string('tel', 20)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->boolean('active')->default(0);
            $table->string('role', 100)->nullable();
            $table->text('description')->nullable();
            $table->rememberToken();
            $table->string('activation_code', 100)->nullable();
            $table->timestamp('actived_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('dept', function(Blueprint $table)
        {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('name');
            $table->integer('company_id');
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('user_dept', function(Blueprint $table)
        {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('dept_id');
            $table->timestamps();
        });
        Schema::create('company', function(Blueprint $table)
        {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('reg_address');
            $table->string('office_address');
            $table->string('legal_person',100);
            $table->integer('staff_num');
            $table->string('business_licence_paper',100);
            $table->string('business_licence_code',50);
            $table->string('organization_paper',100);
            $table->string('organization_code',50);
            $table->string('taxation_paper',100);
            $table->string('taxation_code',50);
            $table->softDeletes();
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
