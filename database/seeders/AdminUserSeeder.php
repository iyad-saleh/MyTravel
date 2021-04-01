<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\User::create(['name'=>'admin',
		'email'=>'admin@admin.com',
		'password'=>bcrypt('12345678'),
		'email_verified_at'=>now(),
        
	]);
    }
}
