<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
       $students = Student::latest('id')->paginate(10);  
       return view('students.index',compact('students'));
    }
    public function store(Request $request){
        try{
            $validate = $request->validate([
                'name' => 'required|string|max:255',
                'gender' => 'required|in:male,female',
                'phone' => 'required|string|max:20',
                'address' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048' //2MB
            ]);
            $imageName = null;
            if($request->hasFile('image')){
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'),$imageName); // $path = 'images/'.$imageName;
                $validate['image'] = $imageName;
            }
            // $student = Student::create($validate);
            Student::create([
                'name' => $validate['name'],
                'gender' => $validate['gender'],
                'phone' => $validate['phone'],
                'address' => $validate['address'],
                'image' => $imageName,
            ]);
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
    public function edit(int $id){
        try{
            $student = Student::findOrFail($id);
            return view('students.edit',compact('student'));
        }catch(\Exception $e){
            echo ''.$e->getMessage();
        }
    }
    public function update(Request $request , int $id){
        try{
            $validate = $request->validate([
                'name' => 'required|string|max:255',
                'gender' => 'required|in:male,female',
                'phone' => 'required|string|max:20',
                'address' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048' //2MB
            ]);
            $imageName = null;
            if($request->hasFile('image')){
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'),$imageName); // $path = 'images/'.$imageName;
                $validate['image'] = $imageName;
            }
            $student = Student::find($id);
            $student->update([
                'name' => $validate['name'],
                'gender' => $validate['gender'],
                'phone' => $validate['phone'],
                'address' => $validate['address'],
                'image' => $imageName,
            ]);
            return redirect()->route('student.index');

        }catch(\Exception $e){
            echo ''.$e->getMessage();
        }
    }
}




// 1234567890.jpg
// aghhfskebfsdfbsjhsdgfjsd.jpg
// https://www.pexels.com/photo.jpg