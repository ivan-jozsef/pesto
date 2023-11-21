<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreingredientsRequest;
use App\Http\Requests\UpdateingredientsRequest;
use App\Models\ingredients;

class IngredientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreingredientsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ingredients $ingredients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ingredients $ingredients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateingredientsRequest $request, ingredients $ingredients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ingredients $ingredients)
    {
        //
    }
}
