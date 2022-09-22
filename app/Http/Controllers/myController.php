<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Don't forget to include the model
use App\Models\students_table;

class myController extends Controller
{
    //Functions that interact with Model

    //display all students from database
    public function students_show()
    {
        $var= students_table::all();
        return $var;
    }

    public function name_disp($name)
    {   
        //display a student by name
        $disp = students_table::where('name',$name)->get();
        return $disp;
    }

    //remove the student whose a certain email
    public function remove($email)
    {
        students_table::where('email',$email)->delete();
        return "student was deleted";
    }

    //add a new student
    public function add(Request $request)  //"Request" is necessary for POST requests for security goals
    {
        students_table::create([
                'name' => $request->name,
                'email' => $request->email,
                'verified' => $request->verified,
                'phone' => $request->phone,
        ]);
    }
}
