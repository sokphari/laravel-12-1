<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
       $students = Student::all();  
       return view('students.index',compact('students'));
    }
    public function store(Request $request){
        try{
            $validate = $request->validate([
                'name' => 'required|string|max:255',
                'gender' => 'required|in:male,female',
                'phone' => 'required|string|max:20',
                'address' => 'required|string|max:255'
            ]);
            $student = Student::create($validate);
            return redirect()->back();
        }catch(\Exception $e){
            echo ''.$e->getMessage();
        }
    }
    public function create(){
        return view('students.create');
    }
    public function destroy(int $id){
        try{
            $student = Student::findOrFail($id);
            $student->delete();
            return redirect()->back();
        }catch(\Exception $e){
            echo ''.$e->getMessage();
        }
    }
}
