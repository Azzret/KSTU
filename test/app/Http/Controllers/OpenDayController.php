<?php

namespace App\Http\Controllers;

use App\OpenDay;
use Illuminate\Http\Request;

class OpenDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $openDays=OpenDay::all();
        return view('openDay.index',[
            'openDays'=>$openDays,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('openDay.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $openDay=new OpenDay($request->all());
        $openDay->save();
        return redirect('/openDay');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OpenDay  $openDay
     * @return \Illuminate\Http\Response
     */
    public function show(OpenDay $openDay)
    {
        return view('openDay.show', [
            'openDay'=>$openDay,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OpenDay  $openDay
     * @return \Illuminate\Http\Response
     */
    public function edit(OpenDay $openDay)
    {
        return view('openDay.edit', [
            'openDay'=>$openDay,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OpenDay  $openDay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OpenDay $openDay)
    {
        $openDay->update($request->all());
        return redirect('/openDay');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OpenDay  $openDay
     * @return \Illuminate\Http\Response
     */
    public function destroy(OpenDay $openDay)
    {
        $openDay->delete();
        return redirect()->back();
    }
}
