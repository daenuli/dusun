<?php

use Illuminate\Database\Seeder;
use App\Model\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        Admin::insert([
        	[
				'name' => 'Administrator',
				'email' => 'admin@example.com',
				'password' => bcrypt('111111'),
				'created_at' => date('Y-m-d H:i:s')
        	]
        ]);
    }
}
