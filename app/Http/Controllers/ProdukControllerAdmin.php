<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\produk;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class ProdukControllerAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        confirmDelete("test", "test");
        return view('admin.produk', [
            'produk' => produk::orderBy('id_kategori')->latest()->get(),
            'kategori' => kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'indikasi' => 'required',
            'aturanpakai' => 'required',
            'perhatian' => 'required',
            'id_kategori' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kandungan' => 'required',
            'foto' => 'nullable'
        ]);
        $slug = Str::slug($validatedData['nama']);
        // Check if the generated slug already exists.
        $count = produk::where('slug', $slug)->count();
        if ($count > 0) {
            // Append a number to the slug to make it unique.
            $slug = $slug . '-' . ($count + 1);
        }

        // Add the slug to the validated data.
        $validatedData['slug'] = $slug;
        if ($request->hasFile('foto')) {

            $imageFile = $request->file('foto'); // Get the uploaded image file.
            $imageName = $imageFile->getClientOriginalName(); // Get the original file name.
            $imagePath = $imageName; // Define the image path relative to the storage directory.

            // Move the uploaded image to the 'storage/resep' directory.
            $imageFile->storeAs('public', $imageName);

            // You can optionally store the image path in the validated data.
            $validatedData['foto'] = $imagePath;
        }
        produk::create($validatedData);

        toast('Produk Ditambah !', 'success');
        return redirect()->back();
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'indikasi' => 'required',
            'aturanpakai' => 'required',
            'perhatian' => 'required',
            'id_kategori' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'kandungan' => 'required',
            'foto' => 'nullable'
        ]);
        if ($request->promo) {

            $validatedData['promo'] = $request->promo ? 1 : 0;
            $validatedData['harga_promo'] = $request->harga_promo;
        }
        // $validatedData['kategori'] =  $request->kategori->nama;
        produk::find($id)->update($validatedData);

        toast('Produk Diupdate !', 'success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        produk::destroy("id", $id);
        toast('Produk Dihapus !', 'success');
        return redirect()->back();
    }
}
