<?php

namespace App\Http\Controllers;

use App\Models\Tabel;
use App\Models\Upload;
use Illuminate\Http\Request;

class TabelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $uploads = Upload::all();
        return view('tables.simple', compact('uploads'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tabel $tabel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tabel $tabel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tabel $tabel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tabel $tabel)
    {
        //
    }
}
