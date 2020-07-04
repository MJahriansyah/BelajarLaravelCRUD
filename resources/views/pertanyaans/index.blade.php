@extends('layouts.app')

@section('title', 'Daftar Pertanyaan')


@section('content')
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h1 class="mt-3">Daftar Pertanyaan</h1>

          <a href="{{url('pertanyaans/create')}}" class="btn btn-primary my-3">Tambah</a>
            @if (session('status'))
            <div class="alert alert-success">
            {{ session('status') }}
            </div>
            @endif

            

            <form method="post" action=""></form>

            <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Isi</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            @foreach($pertanyaans as $p)
            
            <tbody>
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{$p->judul}}</td>
                <td>{{$p->isi}}</td>
                <td>
                  <a href="{{url('pertanyaans/'. $p->id)}}" class="badge badge-info">Detail</a>
                  <a href="{{url('pertanyaans/'. $p->id. '/edit')}}" class="badge badge-warning">Edit</a>
                  <a href="{{url('jawabans/'. $p->id)}}" class="badge badge-success">Jawaban</a>
                <form action="{{url('pertanyaans/'.$p->id)}}" method="post" class="d-inline ">
                  @method('delete')
                  @csrf
                    <button type="submit" class="badge badge-danger">Delete</button>
                  </form>
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>

        </div>
      </div>
    </div>

@endsection
