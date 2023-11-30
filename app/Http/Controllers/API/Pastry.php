<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePastryRequest;
use App\Models\Pastry as PastryModel;

class Pastry extends Controller
{

    public function index()
    {
        return PastryModel::all();
    }

    public function store(CreatePastryRequest $request)
    {

        return PastryModel::create($request->validated());
    }

    public function show(string $id)
    {
        return PastryModel::find($id);
    }

    public function update(CreatePastryRequest $request, string $id)
    {
        PastryModel::find($id)
            ->update($request->validated());

        return PastryModel::find($id);
    }

    public function destroy(string $id)
    {
        PastryModel::find($id)->delete();

        return response("", 200);
    }
}
