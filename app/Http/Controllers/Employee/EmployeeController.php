<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index(){
        #$employees = Employee::get(); //get all employee in db
        $employees = Employee::latest('id')->paginate(10);
        return view('employees.index',compact('employees'));
    }
    public function create(){
        return  view('employees.create-employee');
    }
    public function store(Request $request){
        try{
            #check validation
            $validate =  $request->validate([
              'name' => ['required','string','max:30'],
              'gender' => ['required','string','in:male,female'],
              'address' => ['nullable','string','max:255'],
              'email' => ['required','string'],
              'salary' => ['required','numeric'],
              'position' => ['required','string'],
            ]);
            // $validate = Validator::make($request->all(),[
            //     'name' => ['required','string','max:30'],
            //     'gender' => ['required','string','in:male,female'],
            //     'address' => ['nullable','string','max:255'],
            //     'email' => ['required','string'],
            //     'salary' => ['required','numerice'],
            //     'position' => ['required','string'],
                
            // ]);
            #call model(db)
            #Employee::create([
            #    'name' => $request->name,
            #    'gender' => $request->gender,
            #    'address' => $request->address,
            #    'email' => $request->email,
            #    'salary' => $request->salary,
            #    'position' => $request->position,
            #]);
            Employee::create($validate);

            return redirect()->back();

        }catch(\Exception $e){
            echo ''.$e->getMessage();
        }
    }
    public function destroy(int $id){
        $employee = Employee::find($id);
        $employee->delete(); #delete from table where id = $id
        return redirect()->route('index.get');
    }
    public function edit(int $id){
        $employee = Employee::find($id);
        return view('employees.edit',compact('employee'));
    }
    public function update(Request $request,int $id){
        // validate
        $validate =  $request->validate([
              'name' => ['required','string','max:30'],
              'gender' => ['required','string','in:male,female'],
              'address' => ['nullable','string','max:255'],
              'email' => ['required','string'],
              'salary' => ['required','numeric'],
              'position' => ['required','string'],
        ]);
        $employee = Employee::find($id);
        
        $employee->update($validate);
        return redirect()->route('index.get');
    }
}
