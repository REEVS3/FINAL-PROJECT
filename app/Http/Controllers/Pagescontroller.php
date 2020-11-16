<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Lab;
use App\lab_student;

class Pagescontroller extends Controller
{
    public function index(){

      $Labs = Lab::all();
       $Student = Student::all();

        return view('pages.index',compact('Labs','Student'));

    }


    public function senddata(){


        $formData = request()->all();

        $Student = $formData['student'];
        $lab = $formData['Lab'];
        $password = $formData['password'];



        if ($password== $lab*100)
        {
            return view('pages.Questions',compact('Student','lab'));
        }
        else
        {
          return redirect('/');
        }


    }


    public function charts(){

        $data = lab_student::selectRaw('count(Question_1) as Number, Question_1')->groupBy('Question_1')->get();
        $array[] = ['Question_1','Number'];
        foreach ($data as $key => $value)
         {
            $array[++$key] = [$value->Question_1 ,$value->Number];

        }
             return view('pages.pie')->with('Question_1',json_encode($array));
        }








    public function completedlabs(){

        $studentid = 22;
        $Labs = Lab::all();
        $data = lab_student::where('student_id','LIKE',$studentid)->get();

        return view('pages.completed',compact('Labs','data'));
    }



    public function sendquestions(){




        $formData = request()->all();


        $student_id = $formData['student'];
        $lab_id = $formData['lab'];


        $question1 = $formData['Q1'];
        $question2 = $formData['Q2'];
        $question3 = $formData['Q3'];

        $student = Student::find($student_id);
        $lab = Lab::find($lab_id);



        $student->labs()->attach($lab,['question_1' => $formData['Q1'] ,'question_2' => $formData['Q2'] , 'question_3' =>  $formData['Q3'] ,'labcompleted'=>1]);

        return redirect('/');



    }

}
