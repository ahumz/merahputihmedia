@extends('layouts.app')

@section('content')
@include('partials.flash')



  {{-- <div class="card-harder">Data Siswa
        <a href="{{route('siswa.create')}}" class="btn btn-primary">Tambah Data</a>
        <a href="{{route('siswa.create')}}" class="btn btn-sm btn-success">Tambah Data</a>
    </div> --}}

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Foto</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($siswa as $item)
  <tr>
    <td class="text-center">
      @if($item->foto != null)
        <img src="{{asset('storage/'.$item->foto)}}" width="60" height="100">
        @else 
        <p class="text-center">NO PHOTO</p>
        @endif
    </td>
    <td class="text-center">{{$item->nama}}</td>
    <td class="text-center">{{$item->username}}</td>
    <td class="text-center">{{$item->email}}</td>
    <td>
      <a href="{{route('siswa.edit',['id'=>$item->id])}}" class="btn btn-sm btn-success">Edit</a>
      <form action="{{route('siswa.destroy',['id'=>$item->id])}}" method="post">
          @csrf
          <input type="hidden" name="_method" value="delete">
          <input type="submit" class="btn btn-danger btn-sm" value="Hapus">
      </form>
  </td>

  </tr>
  @endforeach
  </tbody>
</table>
@endsection
