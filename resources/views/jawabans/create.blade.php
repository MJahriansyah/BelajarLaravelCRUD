@extends('layouts.app')

@section('title', 'Form Tambah Jawaban')


@section('content')
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h1 class="mt-3">Form Tambah Jawaban</h1>

            <form method="post" action="{{url('/jawabans')}}" enctype="multipart/form-data">
            @csrf
                <div class="form-group" >
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" placeholder="Masukkan isi" value="{{old('isi')}}"  required>
                </div>
                
                <div class="form-group" >
                    
                    <input type="hidden" class="form-control" id="pertanyaans_id" name="pertanyaans_id" placeholder="Masukkan pertanyaans_id" value="{{$id}}">
                </div>
                
                
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>

        </div>
      </div>
    </div>

@endsection
