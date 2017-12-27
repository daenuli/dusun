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
        	],
            [
                'name' => 'Abid',
                'email' => 'abid@pondokit',
                'password' => bcrypt('111111'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Amar',
                'email' => 'amar@pondokit',
                'password' => bcrypt('111111'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bilal',
                'email' => 'bilal@pondokit',
                'password' => bcrypt('111111'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Usman',
                'email' => 'usman@pondokit',
                'password' => bcrypt('111111'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tama',
                'email' => 'tama@pondokit',
                'password' => bcrypt('111111'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'ahmad',
                'email' => 'ahmad@pondokit',
                'password' => bcrypt('111111'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'yahya',
                'email' => 'yahya@pondokit',
                'password' => bcrypt('111111'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'farid',
                'email' => 'farid@pondokit',
                'password' => bcrypt('111111'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'dika',
                'email' => 'dika@pondokit',
                'password' => bcrypt('111111'),
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'zaki',
                'email' => 'zaki@pondokit',
                'password' => bcrypt('111111'),
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
