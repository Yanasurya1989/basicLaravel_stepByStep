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

        $nilai = [9,9,8,7,3,5,6,8,7,4,6,2,1,7,8,9,5, 100];
        // $countNilai = count($nilai);
        // $totalNilai = array_sum($nilai);
        // $nilaiRatarata = $totalNilai / $countNilai;
        // dd($nilaiRatarata);

        // collection
        // $ngitungNilaiRatarataTeh = collect($nilai)->avg();
        // dd($ngitungNilaiRatarataTeh);

        // ngecek apakah dalam arraynya ada nilai tertentu
        // $cek = collect($nilai)->contains(12);
        // dd($cek);

        // $cek = collect($nilai)->contains(function($value){
        //     return $value < 6;
        // });
        // dd($cek);

        // methode diff : untuk mencari item yang tidak ada 
        $menuA = ['burger', 'siomay','pizza', 'spageti', 'makaroni', 'martabak', 'bakso'];
        $menuB = ['pizza', 'fried chicken','martabak', 'sayur asam', 'pecel lele', 'bakso'];

        // method collect : untuk memfilter
        $kosongDiA = collect($menuA)->diff($menuB);
        // dd($kosongDiA);

        $kosongDiB = collect($menuB)->diff($menuA);
        // dd($kosongDiB);

        $difilter = collect($nilai)->filter(function($value){
            return $value > 7;
        })->all();
        // dd($difilter);

        // method pluck mengambil valuenya saja dalam array
        $biodata = [
            ['nama' => 'mimin', 'umur' => 23],
            ['nama' => 'maman', 'umur' => 43],
            ['nama' => 'mumun', 'umur' => 16],
            ['nama' => 'momon', 'umur' => 10],
        ];
        $cetak = collect($biodata)->pluck('nama')->all();
        // dd($cetak);

        // php native looping
        $nilaiKaliDua = [];
        foreach($nilai as $value){
            array_push($nilaiKaliDua, $value * 2);
        }
        
        // dd($nilaiKaliDua);

        // eloquent looping (method map)
        $naon = collect($nilai)->map(function ($value){

        return $value * 2;
        })->all();

        dd($naon);
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
