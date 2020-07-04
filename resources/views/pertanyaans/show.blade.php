@extends('layouts.app')

@section('title', 'Detail Pertanyaan')


@section('content')
    <div class="container">
      <div class="row">
        <div class="col-10">
          <h1 class="mt-3">Detail Pertanyaan</h1>

                <table class="table" border="1">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Tanggal Dibuat</th>
                        <th scope="col">Tanggal Diubah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>{{$pertanyaan->judul}}</td>
                        <td>{{$pertanyaan->isi}}</td>
                        <td>{{$pertanyaan->created_at}}</td>
                        <td>{{$pertanyaan->updated_at}}</td>                    
                        </tr>
                    </tbody>
                </table>

                <h1 class="mt-3">Detail Jawaban</h1>

                <a href="{{url('jawabans/create/'. $pertanyaan->id)}}" class="btn btn-primary my-3">Tambah</a>
                @if (session('status'))
                <div class="alert alert-success">
                {{ session('status') }}
                </div>
                @endif

                <table class="table" border="1">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Tanggal Dibuat</th>
                        <th scope="col">Tanggal Diubah</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($jawabans as $j)
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
              <a href="{{url('pertanyaans')}}" class="btn btn-primary">Kembali</a>
            

        </div>
      </div>
    </div>

@endsection
