<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Grado;

class GradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data/grados.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            $grado = new Grado();
            $grado->name = mb_strtolower($obj->name);
            $grado->ordinal = mb_strtolower($obj->ordinal);
            $grado->level = mb_strtolower($obj->level);
            $grado->save();

        }
    }
}
