<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $category = $request->input('category');
        if ($category != null) {
            $resep = Resep::where('status', $category)->get();
        } else {
            $resep = Resep::where('id_user', auth()->user()->id)->get();
        }

        return view('pages.Resep', compact('resep'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'foto' => 'required|mimes:jpg,jpeg,png',

        ]);

        $imageFile = $request->file('foto'); // Get the uploaded image file.
        $imageName = $imageFile->getClientOriginalName(); // Get the original file name.
        $imagePath = $imageName; // Define the image path relative to the storage directory.

        // Move the uploaded image to the 'storage/resep' directory.
        $imageFile->storeAs('public/', $imageName);

        // You can optionally store the image path in the validated data.
        $credentials['foto'] = $imagePath;


        $credentials['id_user'] = Auth::user()->id;
        Resep::create($credentials);

        return redirect()->route('resep.index');
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
