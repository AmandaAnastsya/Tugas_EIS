<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use Faker\Factory;
use CodeIgniter\Database\Seeder;

class SeederModulData extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');

        $data = []; // Menyimpan semua data untuk insertBatch

        for ($index = 0; $index < 20; $index++) {
            $data[] = [
                'kode'        => 'K' . $faker->unique()->numberBetween(100, 999), // Tambahkan kode unik
                'nama_modul'  => $faker->word,
                'sks'         => $faker->numberBetween(1, 3),
                'created_at'  => Time::now('Asia/Jakarta', 'id_ID')->toDateTimeString(),
                'updated_at'  => Time::now('Asia/Jakarta', 'id_ID')->toDateTimeString(), // Hapus spasi ekstra
            ];
        }

        // Insert semua data dalam sekali query
        $this->db->table('tb_modul')->insertBatch($data);
    }
}
