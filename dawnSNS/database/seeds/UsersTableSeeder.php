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
        DB::table('users')->insert([
            'username' => 'Dawntown',
            'mail' => 'dawn@dawn.jp',
            'password' => 'dawn123',
            'bio' => 'dawnカリキュラムでSNSを学習しています。'
        ]);
    }
}
