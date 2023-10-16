<?php

namespace App\Http\Controllers;

use App\Models\Extracurriculer;
use Illuminate\Http\Request;

class Extracurriculer_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekskul = Extracurriculer::with('students')->get();
        // dd($ekskul);
        // return view('extracurriculer', compact('ekskul'));
        return view('extracurriculer', ['eksakulList' => $ekskul]);
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
     * @param  \App\Models\Extracurriculer  $extracurriculer
     * @return \Illuminate\Http\Response
     */
    public function show(Extracurriculer $extracurriculer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Extracurriculer  $extracurriculer
     * @return \Illuminate\Http\Response
     */
    public function edit(Extracurriculer $extracurriculer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Extracurriculer  $extracurriculer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Extracurriculer $extracurriculer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Extracurriculer  $extracurriculer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Extracurriculer $extracurriculer)
    {
        //
    }
}
