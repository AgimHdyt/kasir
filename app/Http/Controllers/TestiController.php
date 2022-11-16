<?php

namespace App\Http\Controllers;

use App\Models\Testi;
use Illuminate\Http\Request;

class TestiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('testi.index', [
            'title' => 'Testimoni',
            'testimoni' => Testi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:50',
            'testi' => 'required|max:255',
            'status' => 'required|max:100'
        ]);

        Testi::create($validated);

        return redirect()->to('/testimoni')->with('success', 'Testimoni berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function show(Testi $testi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function edit(Testi $testi)
    {
        dd($testi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testi $testi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testi::where('id', $id)->delete();
        return redirect()->to('/testimoni')->with('success', 'Data berhasil dihapus!');
    }
}
