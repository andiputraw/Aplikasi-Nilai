<?php

namespace Database\Factories;

use App\Models\Student_Identity;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\xtb_studentidentity>
 */
class Student_IdentityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Student_Identity::class;
    public function definition(): array
    {


        $faker = \Faker\Factory::create('id_ID');

        $kelas = config('app.kelas');

        return [
            'nis' => $faker->unique()->numerify('##############'),
            'nama_lengkap' => $faker->name(),
            'nama_panggilan' => $faker->firstName(),
            'jenis_kel' => $faker->randomElement(['Laki-Laki', 'Perempuan']),
            'tpt_lahir' => $faker->city(),
            'tgl_lahir' => $faker->date(),
            'agama' => $faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha']),
            'almt_lengkap' => $faker->address(),
            'kode_jurusan' => $faker->randomElement(['001', '002', '003']),
            't_ajaran' => $faker->randomElement(['2020/2021', '2021/2022', '2022/2023']),
            'kelas' => $faker->randomElement($kelas),
            'userid' => $faker->unique()->userName(),
            'nouseri' => $faker->numerify('#######'),
            'telepon' => $faker->phoneNumber(),
            'nisn' => $faker->numerify('#################'),
        ];
    }
}
