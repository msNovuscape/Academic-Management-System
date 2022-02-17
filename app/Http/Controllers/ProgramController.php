<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public $title = 'Programs';
    public function index(){
        $programs = Program::where('status',true)->get();
        $title = $this->title;
        return view('program.index',compact('title','programs'));
    }
    public function add(){
        $title = $this->title;
        return view('program.add_form',compact('title'));
    }

    public function store(Request $request){
        $values = ['name' => $request['name'],
                    'no_of_semester' => $request['no_of_semester']
                    ];
        $insert = new Program();
        $insert->create($values);            
        return redirect()->route('program.index');
    }
    public function edit($id){
        $title = $this->title;
        $program = Program::findorfail($id);
        return view('program.edit_form',compact('title','program'));

    }

    public function update(Request $request,$id){
        $program = Program::findorfail($id);
        $values = ['name' => $request['name'],
                    'no_of_semester' => $request['no_of_semester']
                    ];
        $update = $program->update($values);
        if($update){
            return redirect()->route('program.index');
        }
    }
}
