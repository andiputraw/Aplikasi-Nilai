<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $jurusan = [[
            'kode_jurusan' => "003",
            'nama_jurusan' => 'RPL',
            'prog_keahlian' => 'Teknologi Komputer dan Informatika',
            'bid_keahlian' => 'komputer',
        ], [
            'kode_jurusan' => "002",
            'nama_jurusan' => 'TKJ',
            'prog_keahlian' => 'Komputer dan Jaringan',
            'bid_keahlian' => 'Jaringan',
        ], [
            'kode_jurusan' => "001",
            'nama_jurusan' => 'AK',
            'prog_keahlian' => 'Kimia Analis',
            'bid_keahlian' => 'Kimia',
        ]];
        DB::table('jurusan')->insert($jurusan);
    }
}
