<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */


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
        if (!Auth::check()) {
            return redirect('login');
        }
        $cart = cart::where('id_produk', $request->produk)->first();
        if ($cart) {
            $cart->update([
                'qty' => $cart->qty + $request->qty
            ]);
        } else {
            cart::create([
                'id_produk' => $request->produk,
                'qty' => $request->qty
            ]);
        }
        toast('Produk Ditambah Ke Keranjang !', 'success');
        return redirect()->back();
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
