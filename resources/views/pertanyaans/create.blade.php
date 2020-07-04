@extends('layouts.app')

@section('title', 'Form Tambah Pertanyaan')


@section('content')
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h1 class="mt-3">Form Tambah Pertanyaan</h1>

            <form method="post" action="{{url('/pertanyaans')}}" enctype="multipart/form-data">
            @csrf
                <div class="form-group" >
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul" value="{{old('judul')}}"  required>
                </div>
                
                <div class="form-group" >
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" placeholder="Masukkan isi" value="{{old('isi')}}"  required>
                </div>
                
                
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>

        </div>
      </div>
    </div>

@endsection
