<?php

namespace App\Http\Controllers;

use App\Models\detail;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class TransaksiControllerAdmin extends Controller
{
    use WithPagination;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.transaksi', [
            'transaksi' => transaksi::paginate(10),
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
        $detail = detail::where('id_transaksi', $id)->get();
        $nama = detail::where('id_transaksi', $id)->first();
        return view('admin.detail', [
            'detail' => $detail,
            'nama' => $nama
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
