<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Profile;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Zin Min Tun',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin123'),
            'is_admin'=>'1',
        ]);

        Profile::create([
            'user_id'=>'1',
            'profile_image'=>'default.png',
            'about'=>'Developer',
            'facebook_link'=>'www.facebook.com',
            'youtube_link'=>'www.youtube.com',
        ]);
    }
}