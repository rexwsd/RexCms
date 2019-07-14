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
            $table->string('username')->default('')->comment('用户姓名');
            $table->string('password')->comment('用户密码');
            $table->string('email')->index('users_email')->unique()->comment('电子邮箱');
            $table->text('avatar')->comment('电子邮箱');
            $table->boolean('status')->default(true)->comment('状态');
            $table->string('telephone')->default('')->index('users_phone')->comment('电话');
            $table->string('last_login_ip')->default('')->comment('最后登录 ip');
            $table->timestamp('last_login_time')->default(\DB::raw('CURRENT_TIMESTAMP'))->comment('最后登录时间戳');
            $table->string('creatorId')->default('system')->comment('创建者');
            $table->string('merchant_code')->default('')->comment('记住登录秘钥');
            $table->string('role_id')->default(0)->comment('用户权限');
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
