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
        //用户表
        Schema::create('users', function(Blueprint $table)
        {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('username', 100)->unique();
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('password', 60);
            $table->boolean('sex')->nullable();
            $table->string('tel', 20)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('idcard', 18)->nullable();
            $table->boolean('active')->default(0);
            $table->integer('company_id')->nullable();
            $table->boolean('role')->nullable();
            $table->boolean('admin')->default(0);
            $table->text('description')->nullable();
            $table->rememberToken();
            $table->string('activation_code', 100)->nullable();
            $table->timestamp('actived_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        //找回密码
        Schema::create('password_resets', function(Blueprint $table)
        {
            $table->engine = 'MyISAM';
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at');
        });
        // Schema::create('dept', function(Blueprint $table)
        // {
        //     $table->engine = 'MyISAM';
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->integer('company_id');
        //     $table->text('description')->nullable();
        //     $table->softDeletes();
        //     $table->timestamps();
        // });
        // Schema::create('user_dept', function(Blueprint $table)
        // {
        //     $table->engine = 'MyISAM';
        //     $table->increments('id');
        //     $table->integer('user_id');
        //     $table->integer('dept_id');
        //     $table->timestamps();
        // });

        //公司
        Schema::create('company', function(Blueprint $table)
        {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('reg_address')->nullable();
            $table->string('office_address');
            $table->string('legal_person',100);
            $table->integer('staff_num')->nullable();
            $table->string('business_licence_paper',100)->nullable();
            $table->string('business_licence_code',50)->nullable();
            $table->string('organization_paper',100)->nullable();
            $table->string('organization_code',50)->nullable();
            $table->string('taxation_paper',100)->nullable();
            $table->string('taxation_code',50)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        //用户和公司对应表
        // Schema::create('user_company', function(Blueprint $table)
        // {
        //     $table->engine = 'MyISAM';
        //     $table->increments('id');
        //     $table->integer('user_id');
        //     $table->integer('company_id');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('company');
        // Schema::dropIfExists('user_company');
    }

}
