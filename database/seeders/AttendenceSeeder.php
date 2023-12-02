<?php

namespace Database\Seeders;

use App\Models\Attendence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
    */
    public function run(): void
    {
        Attendence::factory(8)->create();
    }
}
