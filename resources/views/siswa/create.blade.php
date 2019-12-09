@extends('layouts.app')

@section('content')
@include('partials.flash')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<form 
    action="{{route('siswa.store')}}"
    method="post"
    enctype="multipart/form-data"
>
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
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama"  placeholder="Nama Lengkap" value="{{ old('nama') }}" maxlength="20"/>
                                <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('nama') <span>{{ $message }}</span> @enderror
                                </div>
                            
                              </div>
                              <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror"  id="username" name="username" value="{{ old('username') }}"/>
                                <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('username') <span>{{ $message }}</span> @enderror
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"  id="password" name="password" value="{{ old('password') }}"/>
                                <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('password') <span>{{ $message }}</span> @enderror
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror"  id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir') }}" value="{{ old('weight') }}"/>
                                <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('tgl_lahir') <span>{{ $message }}</span> @enderror
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="8">{{ old('alamat') }}</textarea>
                                <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('alamat') <span>{{ $message }}</span> @enderror
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan" name="kecamatan" value="{{ old('kecamatan') }}"/>
                                <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('kecamatan') <span>{{ $message }}</span> @enderror
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="telpon">Telepon</label>
                                <input type = "" class="form-control @error('telpon') is-invalid @enderror"  id="telpon" name="telpon" value="{{ old('telpon') }}"/>
                                <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('telpon') <span>{{ $message }}</span> @enderror
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}"/>
                                <div class="invalid-feedback active">
                                        <i class="fa fa-exclamation-circle fa-fw"></i> @error('email') <span>{{ $message }}</span> @enderror
                                </div>
                              </div>
                              <p>Foto</p>
                                <input type="file" id="foto" name="foto" value="{{ old('foto') }}">
                              <button type="submit" class="btn btn-primary">Submit</button>
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
	</div>
</div>
  
</form>

<script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        </script>

<script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName1 = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName1);
        });
        </script>
        
@endsection