<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=3 ; $i++) {
            for ($x=1; $x <=6 ; $x++) {
                Course::create([
                    "category_id"=>$i,
                    "trainer_id"=>rand(1,5),
                    "name"=>"course num $i cat num $x",
                    "small_desc"=>"lorem lorem lorem lorem lorem lorem lorem ",
                    "desc"=>"lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ",
                    "price"=>rand(1000,4000),
                    "image"=>"$i$x.png"



                ]);

            }


        }


    }
}
