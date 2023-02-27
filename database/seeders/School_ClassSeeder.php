<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\School_Class;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class School_ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = config('app.kelas');

        foreach ($kelas as $item) {
            // Get a random teacher from the xtb_guru table
            $teacher = Teacher::inRandomOrder()->first();

            // Create a new XtbClassroom instance
            $classroom = new School_Class([
                'kelas' => $item,
                'nip' => $teacher->nip,
                'tp' => '2022/2023' // Change this to the desired value
            ]);

            $classroom->save();
        }
    }
}
