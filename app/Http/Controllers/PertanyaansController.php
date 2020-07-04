<?php

namespace App\Http\Controllers;

use App\Jawaban;
use App\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaans = Pertanyaan::all();
        return view('pertanyaans.index', compact('pertanyaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pertanyaan::create($request->all());
        return redirect('/pertanyaans')->with('status', 'Pertanyaan Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function show(Pertanyaan $pertanyaan)
    {
        $jawabans = Jawaban::where('pertanyaans_id', $pertanyaan->id)->get();
        return view('pertanyaans.show', compact('pertanyaan', 'jawabans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pertanyaan $pertanyaan)
    {
        return view('pertanyaans.edit', compact('pertanyaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pertanyaan $pertanyaan)
    {
        Pertanyaan::where('id', $pertanyaan->id)
                ->update([
                    'judul'  => $request->judul,
                    'isi'  => $request->isi
                ]);

                return redirect('/pertanyaans')->with('status', 'Pertanyaan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertanyaan $pertanyaan)
    {
        Pertanyaan::destroy($pertanyaan->id);
        return redirect('/pertanyaans')->with('status', 'Pertanyaan Berhasil Dihapus');
    }
}
