<?php

namespace App\Http\Controllers\front;

use App\Models\Test;
use App\Models\Course;
use App\Models\Student;
use App\Models\Trainer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{

    public function index(){
     $data["courses"]=   Course::select("id","name","small_desc","category_id","trainer_id","price","image")
        ->orderBy("id","desc")->take(3)->get();

        $data["courses_count"]= Course::count();
        $data["trainers_count"]= Trainer::count();
        $data["students_count"]= Student::count();

        $data['tests']=Test::select("id","name","spec","desc","image")->get();



        return view('front.index')->with($data);
    }
}
