<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use App\Models\Periodo;

class PeriodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $date = Carbon::now();
        $start = $date->copy()->startOfYear();
        $end = $date->copy()->endOfYear();
        $year = 2024;

        for ($i = 1; $i <= 20; $i++) {
            Periodo::create(['start' => $start, 'end' => $end, 'year' => $year]);
            $start = $start->addYear();
            $end = $end->addYear();
            $year = $year + 1;
        } //
    }
}
