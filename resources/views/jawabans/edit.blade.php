@extends('layouts.app')

@section('title', 'Form Ubah Jawaban')


@section('content')
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h1 class="mt-3">Form Ubah Jawaban</h1>

            <form method="post" action="{{url('jawabans/'.$jawaban->id)}}">
                @method('patch')
                @csrf
                <div class="form-group" >
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" placeholder="Masukkan isi" value="{{$jawaban->isi}}"  required>
                </div>
                <div class="form-group" >
                    <input type="hidden" class="form-control" id="pertanyaans_id" name="pertanyaans_id" placeholder="Masukkan pertanyaans_id" value="{{$jawaban->pertanyaans_id}}"  required>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>

        </div>
      </div>
    </div>

@endsection
