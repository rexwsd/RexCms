<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $avatar = new \Laravolt\Avatar\Avatar(config('laravolt.avatar'));
        \App\User::query()
            ->insert([
                "name" => "admin",
                "username" => "管理员",
                "password" => bcrypt('admin'),
                "email" => "admin@admin.com",
                "avatar" => $avatar->create("管理员"),
                "role_id" => 'admin',
            ]);
    }
}
