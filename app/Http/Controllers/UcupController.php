<?php

namespace App\Http\Controllers;

use App\Models\Agus;
use App\Models\Test;
use Illuminate\Http\Request;

class UcupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nama="abdul";
        $harun= 'Muhamad';
        return view('about', compact('nama','harun'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect('/portofolio-root');
    }

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
    public function show(Agus $agus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agus $agus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agus $agus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agus $agus)
    {
        //
    }
}
