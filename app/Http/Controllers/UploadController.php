<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('forms.uploadskripsi');
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
        $upload = new Upload();
        $upload->name = $request->name;
        $upload->nim = $request->nim;
        $upload->program = $request->program;
        $upload->fakultas = $request->fakultas;
        $upload->judul = $request->judul;
        $upload->tahun = $request->tahun;
        $upload->link_doi = $request->link_doi;
        $upload->kata_kunci = $request->kata_kunci;
        // $file = $request->file('file');
        // if ($file) {
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move(public_path('uploads'), $filename);
        //     $upload->file = 'uploads/' . $filename;
        // }
        // $file2 = $request->file('file2');
        // if ($file2) {
        //     $extension = $file2->getClientOriginalExtension();
        //     $filename2 = time() . '_2.' . $extension;
        //     $file2->move(public_path('uploads'), $filename2);
        //     $upload->file2 = 'uploads/' . $filename2;
        // }

             // Simpan file ke storage/app/public/uploads
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
            $upload->file = $path;
        }

        if ($request->hasFile('file2')) {
            $path2 = $request->file('file2')->store('uploads', 'public');
            $upload->file2 = $path2;
        }
        
        $upload->dosenpembimbing1 = $request->dosenpembimbing1;
        $upload->dosenpembimbing2 = $request->dosenpembimbing2;
        $upload->save();
        return redirect()->route('tables.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Upload $upload)
    {

        return view('forms.edituploadskripsi', compact('upload'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Upload $upload)
    {
        $upload->name = $request->name;
        $upload->nim = $request->nim;
        $upload->program = $request->program;
        $upload->fakultas = $request->fakultas;
        $upload->judul = $request->judul;
        $upload->tahun = $request->tahun;
        $upload->link_doi = $request->link_doi;
        $upload->kata_kunci = $request->kata_kunci;

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
            $upload->file = $path;
        }

        if ($request->hasFile('file2')) {
            $path2 = $request->file('file2')->store('uploads', 'public');
            $upload->file2 = $path2;
        }

        $upload->dosenpembimbing1 = $request->dosenpembimbing1;
        $upload->dosenpembimbing2 = $request->dosenpembimbing2;
        $upload->save();

        return redirect()->route('tables.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Upload $upload)
    {
        $upload= Upload::findOrFail($upload->id);
        // Hapus file dari storage jika ada
        if ($upload->file) {
            \Storage::disk('public')->delete($upload->file);
        }
        if ($upload->file2) {
            \Storage::disk('public')->delete($upload->file2);
        }   
        $upload->delete();
        return redirect()->route('tables.index')->with('success', 'Data berhasil dihapus!');
    }
}
