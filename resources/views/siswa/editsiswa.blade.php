@extends('layouts.app')

@section('content')
@include('partials.flash')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<form 
    action="{{route('siswa.update' ,['id'=>$siswa->id])}}"  
    method="post"
    enctype="multipart/form-data"
>
<input type="hidden" name="_method" value="PUT"> 
@csrf
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-9">
                        <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" value="{{$siswa->nama}}" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama"  placeholder="Nama Lengkap">
                                <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('nama') <span>{{ $message }}</span> @enderror
                                </div>
                            
                              </div>
                              <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" value="{{$siswa->username}}" class="form-control @error('username') is-invalid @enderror"  id="username" name="username"/>
                                <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('username') <span>{{ $message }}</span> @enderror
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" value="{{$siswa->password}}" class="form-control @error('password') is-invalid @enderror"  id="password" name="password"/>
                                <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('password') <span>{{ $message }}</span> @enderror
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" value="{{$siswa->tgl_lahir}}" class="form-control @error('tgl_lahir') is-invalid @enderror"  id="tgl_lahir" name="tgl_lahir" />
                                <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('tgl_lahir') <span>{{ $message }}</span> @enderror
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea type="text"  class="form-control @error('alamat') is-invalid @enderror"id="alamat" name="alamat" rows="8">{{ $siswa->alamat}}</textarea>
                                <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('alamat') <span>{{ $message }}</span> @enderror
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan" name="kecamatan" value="{{ $siswa->kecamatan}}"/>
                                <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('kecamatan') <span>{{ $message }}</span> @enderror
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="telpon">Telepon</label>
                                <input type="text" value="{{$siswa->telpon}}" class="form-control @error('telpon') is-invalid @enderror"  id="telpon" name="telpon"/>
                                <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('telpon') <span>{{ $message }}</span> @enderror
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" value="{{$siswa->email}}" class="form-control @error('email') is-invalid @enderror" id="email" name="email"/>
                                <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('email') <span>{{ $message }}</span> @enderror
                                </div>
                              </div>
                              <p>Foto</p>
                                <input type="file" id="foto" name="foto" value="{{$siswa->foto}}">
                                <p><p>
                              <button type="submit" class="btn btn-primary">Update</button>
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
	</div>
</div>
  
</form>
        
@endsection