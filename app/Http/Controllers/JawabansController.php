<?php

namespace App\Http\Controllers;

use App\Jawaban;
use Illuminate\Http\Request;

class JawabansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {   
        $pertanyaan = $id;
        $jawaban = Jawaban::where('pertanyaans_id', $id)->get();
        return view('jawabans.index', compact('jawaban', 'pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {   
        return view('jawabans.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jawaban::create($request->all());
        return redirect('pertanyaans/' .$request->pertanyaans_id)->with('status', 'Jawaban Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function show(Jawaban $jawaban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function edit(Jawaban $jawaban)
    {
        
        return view('jawabans.edit', compact('jawaban'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jawaban $jawaban)
    {
        Jawaban::where('id', $jawaban->id)
                ->update([
                    'isi'  => $request->isi
                ]);

                return redirect('pertanyaans/'. $request->pertanyaans_id)->with('status', 'Jawaban Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jawaban $jawaban)
    {   
        
        Jawaban::destroy($jawaban->id);
        return redirect('pertanyaans/'. $jawaban->pertanyaans_id)->with('status', 'jawaban Berhasil Dihapus');
    }
}
