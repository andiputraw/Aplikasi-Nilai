<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Mata_PelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $mata_pelajaran_RPL = [
            ['mata_pelajaran' => 'Pendidikan Agama dan Budi Pekerti',        'jurusan' => 'RPL', 'kelas' => 'umum'],
            ['mata_pelajaran' => 'Pendidikan Pancasila dan Kewarganegaraan',        'jurusan' => 'RPL', 'kelas' => 'umum'],
            ['mata_pelajaran' => 'Bahasa Indonesia',        'jurusan' => 'RPL', 'kelas' => 'umum'],
            ['mata_pelajaran' => 'Matematika',        'jurusan' => 'RPL', 'kelas' => 'umum'],
            ['mata_pelajaran' => 'Sejarah Indonesia',        'jurusan' => 'RPL', 'kelas' => '1'],
            ['mata_pelajaran' => 'Bahasa Inggris dan Bahasa Asing Lainnya*)',        'jurusan' => 'RPL', 'kelas' => 'umum'],
            ['mata_pelajaran' => 'Bahasa Jepang',        'jurusan' => 'RPL', 'kelas' => '3'],
            ['mata_pelajaran' => 'Seni Budaya',        'jurusan' => 'RPL', 'kelas' => '1'],
            ['mata_pelajaran' => 'Pendidikan Jasmani, Olahraga dan Kesehatan',        'jurusan' => 'RPL', 'kelas' => 'umum'],
            ['mata_pelajaran' => 'Simulasi dan Komunikasi Digital',        'jurusan' => 'RPL', 'kelas' => '1'],
            ['mata_pelajaran' => 'Fisika',        'jurusan' => 'RPL', 'kelas' => '1'],
            ['mata_pelajaran' => 'Kimia',        'jurusan' => 'RPL', 'kelas' => '1'],
            ['mata_pelajaran' => 'Sistem Komputer',        'jurusan' => 'RPL', 'kelas' => '1'],
            ['mata_pelajaran' => 'Komputer dan Jaringan Dasar',        'jurusan' => 'RPL', 'kelas' => '1'],
            ['mata_pelajaran' => 'Pemrograman Dasar',        'jurusan' => 'RPL', 'kelas' => '1'],
            ['mata_pelajaran' => 'Dasar Desain Grafis',        'jurusan' => 'RPL', 'kelas' => '1'],
            ['mata_pelajaran' => 'Pemodelan Perangkat Lunak',        'jurusan' => 'RPL', 'kelas' => '2'],
            ['mata_pelajaran' => 'Basis Data',        'jurusan' => 'RPL', 'kelas' => '2'],
            ['mata_pelajaran' => 'Pemrograman Berorientasi Objek',        'jurusan' => 'RPL', 'kelas' => '2'],
            ['mata_pelajaran' => 'Pemrograman Web dan Perangkat Bergerak',        'jurusan' => 'RPL', 'kelas' => '2'],
            ['mata_pelajaran' => 'Produk Kreatif dan Kewirausahaan',        'jurusan' => 'RPL', 'kelas' => '2'],
            ['mata_pelajaran' => 'B. Sunda',        'jurusan' => 'RPL', 'kelas' => '2'],
            ['mata_pelajaran' => 'Bimbingan dan Penyuluhan/ Konseling',        'jurusan' => 'RPL', 'kelas' => 'umum']
        ];

        $mata_pelajaran_TKJ = [
            [
                'mata_pelajaran' => 'Bahasa Indonesia',
                'jurusan' => 'TKJ', 'kelas' => 'umum'
            ],
            [
                'mata_pelajaran' => 'Matematika',
                'jurusan' => 'TKJ', 'kelas' => 'umum'
            ],
            [
                'mata_pelajaran' => 'Sejarah Indonesia',
                'jurusan' => 'TKJ', 'kelas' => 'umum'
            ],
            [
                'mata_pelajaran' => 'Bahasa Inggris dan Bahasa Asing Lainnya*)',
                'jurusan' => 'TKJ', 'kelas' => 'umum'
            ],
            [
                'mata_pelajaran' => 'Bahasa Jepang',
                'jurusan' => 'TKJ', 'kelas' => '3'
            ],
            [
                'mata_pelajaran' => 'Seni Budaya',
                'jurusan' => 'TKJ', 'kelas' => '1'
            ],
            [
                'mata_pelajaran' => 'Pendidikan Jasmani, Olahraga dan Kesehatan',
                'jurusan' => 'TKJ', 'kelas' => 'umum'
            ],
            [
                'mata_pelajaran' => 'Simulasi dan Komunikasi Digital',
                'jurusan' => 'TKJ', 'kelas' => '1'
            ],
            [
                'mata_pelajaran' => 'Fisika',
                'jurusan' => 'TKJ', 'kelas' => '1'
            ],
            [
                'mata_pelajaran' => 'Kimia',
                'jurusan' => 'TKJ', 'kelas' => '1'
            ],
            [
                'mata_pelajaran' => 'Sistem Komputer',
                'jurusan' => 'TKJ', 'kelas' => '1'
            ],
            [
                'mata_pelajaran' => 'Komputer dan Jaringan Dasar',
                'jurusan' => 'TKJ', 'kelas' => '1'
            ],
            [
                'mata_pelajaran' => 'Pemrograman Dasar',
                'jurusan' => 'TKJ', 'kelas' => '1'
            ],
            [
                'mata_pelajaran' => 'Dasar Desain Grafis',
                'jurusan' => 'TKJ', 'kelas' => '1'
            ],
            [
                'mata_pelajaran' => 'Teknologi Jaringan Berbasis Luas (WAN)',
                'jurusan' => 'TKJ', 'kelas' => '2'
            ],
            [
                'mata_pelajaran' => 'Administrasi Infrastruktur Jaringan',
                'jurusan' => 'TKJ', 'kelas' => '2'
            ],
            [
                'mata_pelajaran' => 'Administrasi Sistem Jaringan',
                'jurusan' => 'TKJ', 'kelas' => '2'
            ],
            [
                'mata_pelajaran' => 'Teknologi Layanan Jaringan',
                'jurusan' => 'TKJ', 'kelas' => '2'
            ],
            [
                'mata_pelajaran' => 'Produk Kreatif dan Kewirausahaan',
                'jurusan' => 'TKJ', 'kelas' => '2'
            ],
            [
                'mata_pelajaran' => 'B. Sunda',
                'jurusan' => 'TKJ', 'kelas' => '2'
            ],
            [
                'mata_pelajaran' => 'Bimbingan dan Penyuluhan/ Konseling',
                'jurusan' => 'TKJ', 'kelas' => 'umum'
            ],
        ];

        $mata_pelajaran_AK = [
            [
                "mata_pelajaran" => "Pendidikan Agama dan Budi Pekerti",
                "jurusan" => "AK", 'kelas' => 'umum'
            ],
            [
                "mata_pelajaran" => "Pendidikan Pancasila dan Kewarganegaraan",
                "jurusan" => "AK", 'kelas' => 'umum'
            ],
            [
                "mata_pelajaran" => "Bahasa Indonesia",
                "jurusan" => "AK", 'kelas' => 'umum'
            ],
            [
                "mata_pelajaran" => "Matematika",
                "jurusan" => "AK", 'kelas' => 'umum'
            ],
            [
                "mata_pelajaran" => "Sejarah Indonesia",
                "jurusan" => "AK", 'kelas' => '1'
            ],
            [
                "mata_pelajaran" => "Bahasa Inggris dan Bahasa Asing Lainnya*",
                "jurusan" => "AK", 'kelas' => 'umum'
            ],
            [
                "mata_pelajaran" => "Bahasa Jepang",
                "jurusan" => "AK", 'kelas' => '3'
            ],
            [
                "mata_pelajaran" => "Seni Budaya",
                "jurusan" => "AK", 'kelas' => '1'
            ],
            [
                "mata_pelajaran" => "Pendidikan Jasmani, Olahraga dan Kesehatan",
                "jurusan" => "AK", 'kelas' => 'umum'
            ],
            [
                "mata_pelajaran" => "Simulasi dan Komunikasi Digital",
                "jurusan" => "AK", 'kelas' => 'umum'
            ],
            [
                "mata_pelajaran" => "Fisika",
                "jurusan" => "AK", 'kelas' => '1'
            ],
            [
                "mata_pelajaran" => "Kimia",
                "jurusan" => "AK", 'kelas' => '1'
            ],
            [
                "mata_pelajaran" => "Analisis Kimia Dasar",
                "jurusan" => "AK", 'kelas' => '1'
            ],
            [
                "mata_pelajaran" => "Teknik Dasar Pekerjaan Laboratorium Kimia",
                "jurusan" => "AK", 'kelas' => '1'
            ],
            [
                "mata_pelajaran" => "Analisis Konstanta Fisik",
                "jurusan" => "AK", 'kelas' => '2'
            ],
            [
                "mata_pelajaran" => "Analisis Titrimetri dan Gravimetri",
                "jurusan" => "AK", 'kelas' => '2'
            ],
            [
                "mata_pelajaran" => "Analisis Bahan Organik",
                "jurusan" => "AK", 'kelas' => '2'
            ],
            [
                "mata_pelajaran" => "Analisis Bahan Anorganik",
                "jurusan" => "AK", 'kelas' => '2'
            ],
            [
                "mata_pelajaran" => "Analisis Kimia Instrumen",
                "jurusan" => "AK", 'kelas' => '2'
            ],
            [
                "mata_pelajaran" => "Analisis Kimia Terpadu",
                "jurusan" => "AK", 'kelas' => '2'
            ],
            [
                "mata_pelajaran" => "Analisis Mikrobiologi",
                "jurusan" => "AK", 'kelas' => '2'
            ],
            [
                "mata_pelajaran" => "Pengelolaan Laboratorium",
                "jurusan" => "AK", 'kelas' => '2'
            ],
            [
                "mata_pelajaran" => "Produk Kreatif dan Kewirausahaan",
                "jurusan" => "AK", 'kelas' => '2'
            ],
            [
                "mata_pelajaran" => "Analisis Kualitatif",
                "jurusan" => "AK", 'kelas' => '2'
            ],
            [
                "mata_pelajaran" => "B. Sunda",
                "jurusan" => "AK", 'kelas' => '2'
            ],
            [
                "mata_pelajaran" => "Bimbingan dan Penyuluhan/ Konseling",
                "jurusan" => "AK", 'kelas' => 'umum'
            ]
        ];





        DB::table('mata_pelajaran')->insert($mata_pelajaran_AK);
        DB::table('mata_pelajaran')->insert($mata_pelajaran_RPL);
        DB::table('mata_pelajaran')->insert($mata_pelajaran_TKJ);
    }
}
