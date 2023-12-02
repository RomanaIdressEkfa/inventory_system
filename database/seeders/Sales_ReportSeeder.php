<?php

namespace Database\Seeders;

use App\Models\Sales_Report;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Sales_ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sales_Report::factory(8)->create();
    }
}
