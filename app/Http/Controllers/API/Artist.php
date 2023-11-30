<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArtistRequest;
use App\Http\Requests\UpdateArtistRequest;
use App\Models\Artist as ArtistModel;
use Illuminate\Http\Request;

class Artist extends Controller
{

    public function index()
    {
        return ArtistModel::all();
    }

    public function store(ArtistRequest $request)
    {

        return ArtistModel::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ArtistModel::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArtistRequest $request, string $id)
    {
        ArtistModel::find($id)
            ->update($request->validated());

        return ArtistModel::find($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ArtistModel::find($id)->delete();

        return response()->status(200);
    }
}
