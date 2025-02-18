<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\detail;
use App\Models\produk;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $cartItems = cart::where('id_user', auth()->user()->id)->get();


        if ($cartItems != null) {
            $totalCost = $cartItems->sum(function ($item) {
                return $item->produk->harga * $item->qty;
            });
        }
        return view('pages.Cart', [
            'cart' => $cartItems ?? 0,
            'total' => $totalCost ?? 0
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = auth()->user(); // Get the authenticated user

        // Check if the user is logged in
        if (!$user) {
            // Handle the case where the user is not logged in
            return redirect()->route('login'); // You can redirect to the login page or handle it differently
        }

        $cart = Cart::where('id', $user->id)->get();

        if ($cart->isEmpty()) {
            toast('Barang Sudah Di Checkout !', 'danger');
            return redirect()->back();
        }

        // Initialize an empty message
        $message = '';
        // Include user's name and phone number in the message
        $message .= "Nama Konsumen: {$user->nama}\nNo. Telepon Konsumen: {$user->hp}\n\n======Pesanan======\n\n";
        // Iterate through the cart items and add their details to the message
        foreach ($cart as $item) {
            $productName = $item->produk->nama;
            $productPrice = $item->produk->harga;
            $quantity = $item->qty;
            $total = $productPrice * $quantity;

            // Add product details to the message
            $message .= "Nama Produk: $productName\nHarga: Rp $productPrice\nKuantitas: $quantity\nTotal: Rp $total\n\n";
        }

        // URL encode the message
        $encodedMessage = urlencode($message);

        // Construct the WhatsApp deep link URL
        $whatsappURL = "https://api.whatsapp.com/send?phone=6287798188955&text=$encodedMessage";

        // Redirect the user to the WhatsApp deep link URL
        header("Location: $whatsappURL");
        $transaksi = transaksi::create([
            'id_user' => auth()->user()->id
        ]);
        foreach ($cart as $item) {
            detail::create([
                'id_produk' => $item->produk->id,
                'id_transaksi' => $transaksi->id,
                'qty' => $item->qty
            ]);
            $qtynow = $item->produk->stok - $item->qty;

            produk::find($item->produk->id)->update([
                'stok' => $qtynow
            ]);
            $this->destroy($item->id);
        }

        die();
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
    public function edit(string $id, Request $request)
    {
        $cart = cart::where('id_produk', $id)->first();
        if ($request->jenis == 'tambah') {
            $qtynow = $cart->qty + 1;
        } else {
            $qtynow = $cart->qty - 1;
        }
        $cart->update(['qty' => $qtynow]);
        return back();
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
        cart::destroy('id', $id);

        toast('Produk Dihapus Dari Keranjang !', 'success');
        return redirect()->back();
    }
}
