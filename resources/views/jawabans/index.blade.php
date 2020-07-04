@extends('layouts.app')

@section('title', 'Daftar Jawaban')


@section('content')
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h1 class="mt-3">Daftar Jawaban</h1>

          <a href="{{url('jawabans/create/'. $pertanyaan)}}" class="btn btn-primary my-3">Tambah</a>
            @if (session('status'))
            <div class="alert alert-success">
            {{ session('status') }}
            </div>
            @endif

            <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Isi</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col">Tanggal Diubah</th>
              </tr>
            </thead>
            @foreach($jawaban as $j)
            
            <tbody>
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{$j->isi}}</td>
                <td>{{$j->created_at}}</td>
                <td>{{$j->updated_at}}</td>
                <td>
                  <a href="{{url('jawabans/'. $j->id. '/edit')}}" class="badge badge-warning">Edit</a>
                <form action="{{url('jawabans/'.$j->id)}}" method="post" class="d-inline ">
                  @method('delete')
                  @csrf
                    <button type="submit" class="badge badge-danger">Delete</button>
                  </form>
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>
          <a href="{{url('/pertanyaans')}}" class="btn btn-primary my-3">Kembali</a>

        </div>
      </div>
    </div>

@endsection
