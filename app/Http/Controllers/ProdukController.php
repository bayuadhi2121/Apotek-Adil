<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\kategori;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class ProdukController extends Controller
{
    use WithPagination;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $search = $request->search;
        $category = $request->input('category'); // Get the 'category' query parameter
        if ($category != null) {
            $id = kategori::where('nama', $category)->first();
            $produk = produk::where('id_kategori', $id->id)->where('stok', '>', 0)->paginate(10);
        } else {
            $produk = produk::where('nama', 'LIKE', '%' . $search . '%')->where('stok', '>', 0)->paginate(10);
        }
        // Query the database to get products based on the selected category


        return view('pages.Produk', compact('produk', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $cartItem = Cart::where('id_produk', $request->id)->first();

        if ($cartItem) {
            $cartItem->update(['qty' => $cartItem->qty + 1]);
        } else {
            Cart::create([
                'id_user' => auth()->user()->id,
                'id_produk' => $request->id,
                'qty' => 1,
            ]);
        }
        toast('Produk Ditambah Ke Keranjang !', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $detail = produk::where('slug', $slug)->firstOrFail();

        return view('pages.Detail', ['detail' => $detail]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
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
