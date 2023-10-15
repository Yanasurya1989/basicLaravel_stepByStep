<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Student_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('test');

        // $nama = 'MImin';
        // return view('student', ['nama' => $nama]);
        // $student = Student::all(); //select * from students
        // dd($student);
        // return view('student', ['satudentList' => $student]);

        // query builder (select + insert)
        //    $student = DB::table('students')->get();
        //    dd($student);

            // insert
        // DB::table('students')->insert([
        //     'name' => 'diisi',
        //     'gender' => 'L',
        //     'nis' => '0102031',
        //     'class_id' => 1
        // ]);
            // update
        // DB::table('students')->where('id', 25)->update([
        //     'name' => 'ganti',
        //     'class_id' => 3
        // ]);
            // delete
        // DB::table('students')->where('id', 25)->delete();

        // eloquent(select + insert)
        // $student = Student::all();
        // dd($student);

        // Student::create([
        //     'name' => 'eloquent',
        //     'gender' => 'P',
        //     'nis' => '0102042',
        //     'class_id' => 2
        // ]);

            // update
        // Student::find(3)->update([
        //     'name' => 'namadiganti',
        //     'class_id' => 2
        // ]);

            // delete
        // Student::find(2)->delete(); //find digunakan agar data tidak terhapus semua, tapi hanya yg id tertentu
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
