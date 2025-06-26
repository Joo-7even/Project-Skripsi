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
    public function index(Request $request)
    {
        $search = $request->input('search');

    $uploads = \App\Models\Upload::query()
        ->when($search, function ($query, $search) {
            $query->where('name', 'like', "%{$search}%")
                  ->orWhere('nim', 'like', "%{$search}%")
                  ->orWhere('program', 'like', "%{$search}%")
                  ->orWhere('judul', 'like', "%{$search}%")
                  ->orWhere('tahun', 'like', "%{$search}%")
                  ->orWhere('kata_kunci', 'like', "%{$search}%");
        })
        ->get();

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
