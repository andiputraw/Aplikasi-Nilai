<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\XtbTeacher;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            JurusanSeeder::class,
            TeacherSeeder::class,
            School_ClassSeeder::class,
            Student_IdentitySeeder::class,
            Mata_PelajaranSeeder::class
        ]);
    }
}
