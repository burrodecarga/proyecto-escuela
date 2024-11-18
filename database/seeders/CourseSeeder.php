<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/data/courses.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            $curso = new Course();
            $curso->grado = mb_strtolower($obj->grado);
            $curso->name = mb_strtolower($obj->name);
            $curso->slug = Str::slug($obj->name);
            $curso->grado_id = mb_strtolower($obj->grado_id);
            $curso->ordinal = $obj->ordinal;
            $curso->level = $obj->level;
            $curso->save();
        }
    }

}
