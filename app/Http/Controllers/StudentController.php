<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // the eloquent function to displays data
            $student = Student::all(); // Mengambil semua isi tabel
            $paginate = Student::orderBy('id_student', 'asc')->paginate(3);
            return view('student.index', ['student' => $student,'paginate'=>$paginate]);
    }
    public function create()
    {
        return view('student.create');
    }
    public function store(Request $request)
    {
    //melakukan validasi data
        $request->validate([
            'Nim' => 'required',
            'Name' => 'required',
            'Class' => 'required',
            'Major' => 'required',
        ]);

        // eloquent function to add data
        Student::create($request->all());

        // if the data is added successfully, will return to the main page
        return redirect()->route('student.index')
            ->with('success', 'Student Successfully Added');
    }

    public function show($nim)
    {
        // displays detailed data by finding / by Student Nim
            $Student = Student::where('nim', $nim)->first();
            return view('student.detail', compact('Student'));
    }

    public function edit($nim)
    {
        // displays detail data by finding based on Student Nim for editing
            $Student = Student::where('nim', $nim)->first();
            return view('student.edit', compact('Student'));
    }

    public function update(Request $request, $id)
    {
        //validate the data
            $request->validate([
            'Nim' => 'required',
            'Name' => 'required',
            'Class' => 'required',
            'Major' => 'required',
        ]);

        //Eloquent function to update the data
            Student::where('nim',$nim)
                ->update([
                    'nim'=>$request->Nim,
                    'name'=>$request->Name,
                    'class'=>$request->Class,
                    'major'=>$request->Major,
                ]);

        //if the data successfully updated, will return to main page
            return redirect()->route('student.index')
                ->with('success', 'Student Successfully Updated');
    }

    public function destroy($nim)
    {
        //Eloquent function to delete the data
            Student::where('nim', $nim)->delete();
                return redirect()->route('student.index')
                    -> with('success', 'Student Successfully Deleted');
    }
};
