<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TeacherFactory extends Factory
{

    protected $model = Teacher::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $photoNumber = 1;
        $faker = \Faker\Factory::create('id_ID');

        return [
            'nip' => $faker->unique()->numberBetween(100000000, 999999999),
            'nama_guru' => $faker->name,
            'alamat_guru' => $faker->address,
            'telepon_guru' => $faker->phoneNumber,
            'tanggal_lahir' => $faker->date(),
            'tempat_lahir' => $faker->city,
            'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
            'pendidikan' => $faker->randomElement(['S1', 'S2', 'S3']),
            'jurusan' => $faker->word,
            'kode_jurusan' => $faker->randomElement(['001', '002', '003']),
            'pelajaran' => $faker->randomElement(['Matematika', 'Fisika', 'Kimia', 'Basis Data', 'Pendidikan Kewarganegaraan', 'Pemodelan Perangkat Lunak', 'Pemrograman Web dan Perangkat Bergerak', 'Dasar Pemrograman', 'Bahasa Indonesia', 'Bahasa Inggris', 'Bahasa Jepang', 'Pelajaran Kimia Lainnya(saya kurang tau tentang perkimiaan)']),
            'status_kb' => $faker->randomElement(['Kawin', 'Belum Kawin']),
            'jabatan' => $faker->randomElement(['Guru', 'Kepala Sekolah', 'Wakil Kepala Sekolah']),
            'agama' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha']),
            'email' => $faker->unique()->safeEmail,
            'hp' => $faker->phoneNumber,
            'photo' => 'photo_' . $photoNumber++ . '.jpg',
        ];
    }
}
