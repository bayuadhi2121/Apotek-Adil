<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Resep;
use Illuminate\Http\Request;

class ResepControllerAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.resep', [
            'resep' => Resep::orderBy('created_at')->paginate(10)
        ]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'catatan' => 'required',
            'pilih' => 'required'
        ]);
        Resep::where('id', $id)->update([
            'catatan' => $request->catatan,
            'status' => $request->pilih
        ]);
        toast('Resep Telah ' . $request->pilih, 'success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        confirmDelete('Ingin Menghapus ?');
        Resep::find($id)->delete();
        return back();
    }
}
