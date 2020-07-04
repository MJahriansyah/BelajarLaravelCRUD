@extends('layouts.app')

@section('title', 'Form Ubah Pertanyaan')


@section('content')
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h1 class="mt-3">Form Ubah Pertanyaan</h1>

            <form method="post" action="{{url('pertanyaans/'.$pertanyaan->id)}}">
                @method('patch')
                @csrf
                <div class="form-group" >
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul" value="{{$pertanyaan->judul}}"  required>
                </div>
                <div class="form-group" >
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" placeholder="Masukkan isi" value="{{$pertanyaan->isi}}"  required>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>

        </div>
      </div>
    </div>

@endsection
