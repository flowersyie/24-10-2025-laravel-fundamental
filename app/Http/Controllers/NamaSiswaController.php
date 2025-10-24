<?php

namespace App\Http\Controllers;

use App\Models\NamaSiswa;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class NamaSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index(): Factory|View
    {
        return view('namasiswa');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NamaSiswa $namaSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NamaSiswa $namaSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NamaSiswa $namaSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NamaSiswa $namaSiswa)
    {
        //
    }
}
