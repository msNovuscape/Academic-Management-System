<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public $title = "Subject";
    public function index(){



//        $subjects = Subject::join('programs','programs.id','=','subjects.program_id')->get();

        $subjects = Subject::get();

     /*  if($subjects->program_id == $subjects->program_id && $subjects->subject_name == $subjects->subject_name){
            echo "Addition data";
        }*/
       // dd($subjects);
    // $subjects = subject::where('status',true)->get();

//   $abc = new Subject();



             $title = $this->title;
       return view('subject.index',compact('title','subjects'));
    }
    public function add(){
    $add = Program::get()->all();
    $title = $this->title;
    return view('subject.add_form',compact('title','add'));

    }
    public function store(Request $request){

$encode= json_decode($request['subject_name']);
    $values = [
        'program_id'=>$request['program_id'],
        'semester'=>$encode,
        'subject_name'=>$request['subject_name'],

        ];


       $insert = new subject();
    $insert->create($values);
    return redirect()->route('subject.index');
    }

    public function edit($id){
        $title = $this->title;
        $subject=subject::findorfail($id);
        return view('subject.edit_form',compact('title','subject'));


    }

    public function delete($id){
        $title=$this->title;
        $action= Subject::findorfail($id);
        $delete= $action->delete();
        if($delete){
            return redirect()->route('subject.index');
        }


    }

}
