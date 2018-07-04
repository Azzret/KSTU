<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Faculty;
use App\School;
use App\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicants = DB::table('applicants')
                                                    ->select(DB::raw('*'))
                                                    ->orderByDesc(DB::raw('point'))
                                                    ->get();

        return view('applicant.index',[
            'applicants'=>$applicants,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = School::all();
        $faculties = Faculty::all();
        $places = Place::all();

        return view('applicant.create', [
            'schools' => $schools,
            'places'=>$places,
            'faculties' => $faculties,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $applicant = new Applicant($request->all());
        $applicant->save();
        return redirect('/software');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        return view('applicant.show',[
            'applicant'=>$applicant,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        return view('applicant.edit',[
            'applicant'=>$applicant,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        $applicant->update($request->all());
        return redirect('/applicant');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        $applicant->delete();
        return redirect()->back();
    }
}
