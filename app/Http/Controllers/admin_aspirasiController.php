<?php

namespace App\Http\Controllers;

use App\aspirasi;
use Illuminate\Http\Request;

class admin_aspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aspirasi = aspirasi::all();
        return view('admin.admin', compact('aspirasi'));
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
     * @param  \App\aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function show(aspirasi $aspirasi)
    {
        return view('admin', compact('aspirasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function edit(aspirasi $aspirasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, aspirasi $aspirasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(aspirasi $aspirasi)
    {
        aspirasi::where('aspirasi', $id)->delete();
    }
}
