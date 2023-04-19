<?php

namespace App\Http\Controllers;

use App\Models\bang1;
use App\Models\bang2;
use Illuminate\Http\Request;

class Bang2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showdata()
    {
         $data =  bang1::join('bang2s' , 'bang1s.id_ngpt' , 'bang2s.id' )->select('bang1s.*' ,'bang2s.tenngpt' , 'bang2s.mst')->get();
         dd($data->toArray());
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
     * @param  \App\Models\bang2  $bang2
     * @return \Illuminate\Http\Response
     */
    public function show(bang2 $bang2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bang2  $bang2
     * @return \Illuminate\Http\Response
     */
    public function edit(bang2 $bang2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bang2  $bang2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bang2 $bang2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bang2  $bang2
     * @return \Illuminate\Http\Response
     */
    public function destroy(bang2 $bang2)
    {
        //
    }
}
