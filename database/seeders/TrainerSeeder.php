<?php

namespace Database\Seeders;

use App\Models\Trainer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            "name"=>"habiba",
            "phone"=>"01222555222",
            "spec"=>"web developer",
            "image"=>"1.png"

        ]);

        Trainer::create([
            "name"=>"Mamdouh",
            "phone"=>"01255225522",
            "spec"=>"dentist",
            "image"=>"2.png"

        ]);
        Trainer::create([
            "name"=>"Beshoy",
            "phone"=>"012552255447",
            "spec"=>" web developer",
            "image"=>"3.png"

        ]);
        Trainer::create([
            "name"=>"Jackleen",
            "phone"=>"0122289952",
            "spec"=>"dentist",
            "image"=>"4.png"

        ]);
        Trainer::create([
            "name"=>"youssef",
            "phone"=>"012252321545",
            "spec"=>"history",
            "image"=>"5.png"

        ]);
    }
}
