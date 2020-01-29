<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function __construct(Student $model)
    {
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = $this->model
                        ->join('users', 'users.id', '=', 'students.user_id')
                        ->select('students.*', 'users.name as user_name')
                        ->orderBy('students.name', 'asc')
                        ->paginate(5);

        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required',
            'phone_number'      => 'required',
            'gender'            => 'required',
            'religion'          => 'required',
            'address'           => 'required'
        ]);

        $this->model->store($request);

        return redirect()->route('students.index')->with('success', 'Successfully input siswa data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = $this->model->getOne($id);

        return view('student.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'              => 'required',
            'phone_number'      => 'required',
            'gender'            => 'required',
            'religion'          => 'required',
            'address'           => 'required'
        ]);

        $this->model->updateData($request, $id);

        return redirect()->route('students.index')->with('success', 'Successfully update siswa data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->model->where('id', $id)->delete();

        return redirect()->route('students.index')->with('success', 'Successfully delete siswa data!');
    }
}
