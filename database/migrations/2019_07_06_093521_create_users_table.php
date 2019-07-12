<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('递增 ID主键');
            $table->string('name')->index('users_user_name')->default('')->comment('用户昵称');
            $table->string('real_name')->default('')->comment('用户姓名');
            $table->string('password')->comment('用户密码');
            $table->string('email')->index('users_email')->unique()->comment('电子邮箱');
            $table->string('avatar')->default('')->comment('电子邮箱');
            $table->string('phone')->default('')->index('users_phone')->comment('电话');
            $table->string('last_login_ip')->default('')->comment('最后登录 ip');
            $table->timestamp('last_login_time')->default(\DB::raw('CURRENT_TIMESTAMP'))->comment('最后登录时间戳');
            $table->string('remember_token')->default('')->comment('记住登录秘钥');
            $table->tinyInteger('role')->default(0)->comment('用户权限');
            $table->tinyInteger('status')->default(1)->comment('用户状态');
            $table->dateTime('email_verified_at')->nullable()->comment('邮件验证时间');
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
        Schema::dropIfExists('users');
    }
}
