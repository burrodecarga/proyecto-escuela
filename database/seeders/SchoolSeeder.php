<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\School;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data/schools.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            $school = new School();
            $school->name = mb_strtolower($obj->name);
            $school->slug = Str::slug($obj->name);
            $school->nit = mb_strtolower($obj->nit);
            $school->dane = mb_strtolower($obj->dane);
            $school->save();
        }
    }
}
