<?php

use Illuminate\Database\Seeder;

use App\Model\Education;
class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::truncate();
        Education::insert([
            [
                'name' => 'Tidak / Belum Sekolah',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Belum Tamat SD / Sederajat',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tamat SD / Sederajat',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'SLTP / Sederajat',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'SLTA / Sederajat',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Diploma I / II',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Akademi / Diploma III / Sarjana Muda',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Diploma IV / Sastra I',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sastra II',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sastra III',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
