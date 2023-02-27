<?php

namespace Database\Seeders;

use App\Models\Student_Identity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Student_IdentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student_Identity::factory()->count(30)->create();
    }
}
