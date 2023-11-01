<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images=Image::all();
        return $images;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Url' => 'required|max:255',
            'imageable_id' => 'required',
            'imageable_type' => 'required|max:255'
        ]);

        $images=Image::create($request->all());
        return $images;
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        return $image;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        $request->validate([
            'Url' => 'required|max:255',
            'imageable_id' => 'required',
            'imageable_type' => 'required|max:255'
        ]);

        $image->update($request->all());
        return $image;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        $image->delete();
        return $image;
    }
}
