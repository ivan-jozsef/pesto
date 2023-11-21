<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePestosRequest;
use App\Http\Requests\UpdatePestosRequest;
use App\Models\Pestos;
use Illuminate\Support\Facades\DB;


class PestosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pestos = DB::table('pestos')->get();
        return view('pesto.index', compact('pestos'));
    }

    public function view($id) {
        $pesto = DB::table('pestos')->find('$id');

        if(!$pesto) {
            abort(404);
        }

        $ingredients = DB::table('ingredients')->where('pestos.id', $id)->get();
        return view('pesto.view', compact('pestos', 'ingredients'));
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
    public function store(StorePestosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pestos $pestos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pestos $pestos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePestosRequest $request, Pestos $pestos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pestos $pestos)
    {
        //
    }
}
