<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Program;
class Subject extends Model
{

    use HasFactory;
    protected $tables = "subject";




    protected $fillable = ['semester','subject_name','program_id'];

    public function program(){
        return $this->belongsTo(Program::class);
    }






}


//SELECT * FROM subjects INNER JOIN programs ON subjects.program_id = programs.id;
//->select('*')
//->join('programs','programs.id','=','subjects.program_id')->get();
