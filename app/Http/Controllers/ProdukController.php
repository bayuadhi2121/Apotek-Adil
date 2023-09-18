<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\produk;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class ProdukController extends Controller
{
    use WithPagination;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = produk::paginate(10);

        return view('pages.Produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */


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
    public function show(produk $produk)
    {
        return view('pages.Detail', [
            'detail' => produk::find($produk->id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, string $qty)
    {
        $cartItem = Cart::where('id_produk', $id)->first();

        if ($cartItem) {

            $qty = $cartItem->qty + 1;
            $cartItem->update(['qty' => $qty]);
        } else {
            Cart::create([
                'id_produk' => $id,
                'qty' => 1,
            ]);
        }
        toast('Produk Ditambah Ke Keranjang !', 'success');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
