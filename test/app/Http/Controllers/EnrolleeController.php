<?php

namespace App\Http\Controllers;

use App\Enrollee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrolleeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enrollees = Enrollee::all();
        return view('enrollee.index',[
            'enrollees'=>$enrollees,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        return view('Enrollee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enrollee = new Enrollee($request->all());
        $enrollee->save();
        return redirect('/enrollee');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enrollee  $enrollee
     * @return \Illuminate\Http\Response
     */
    public function show(Enrollee $enrollee)
    {
        return view('Enrollee.show',[
            'enrollee'=>$enrollee,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enrollee  $enrollee
     * @return \Illuminate\Http\Response
     */
    public function edit(Enrollee $enrollee)
    {
        return view('Enrollee.edit', [
            'enrollee'=>$enrollee,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enrollee  $enrollee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enrollee $enrollee)
    {
        $enrollee->update($request->all());
        return redirect('/enrollee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enrollee  $enrollee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enrollee $enrollee)
    {
        $enrollee->delete();

        return redirect()->back();
    }
}
