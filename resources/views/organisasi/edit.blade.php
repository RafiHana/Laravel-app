@extends('layouts.app')
@section('content')
<div class="container">
<h1>{{ __('Organisasi') }}</h1>
<form method="post" action="{{ url('/organisasi/update/'.$organisasi->id) }}">
@csrf
<div class="row mb-3">
<label for="nama_organisasi" class="col-3 col-form-label">Organisasi</label>
<div class="col-9">
<input type="text" class="form-control" id="nama_organisasi"
name="nama_organisasi"
value="{{ old('nama_organisasi') ?? $organisasi->nama_organisasi }}"/>
</div>
</div>

<div class="row mb-3">
<label for="fakultas_id" class="col-3 col-form-label">Fakultas</label>
<div class="col-9">
<select class="form-select" name="fakultas_id" id="fakultas_id">
@foreach ($fakultas as $fa)
<option value="{{ $fa->id }}">{{ $fa->nama_fakultas }}</option>
@endforeach
</select>
</div>
</div>

<div class="row mb-3">
<label for="nama_prodi" class="col-3 col-form-label">Prodi</label>
<div class="col-9">
<select class="form-select" name="nama_prodi" id="nama_prodi">
@foreach ($prodis as $prodi)
<option value="{{ $prodi->id }}">{{ $prodi->nama_prodi }}</option>
@endforeach
</select>
</div>
</div>

<div class="row">
<div class="col-md-12">
<button type="submit" class="btn btn-large btn-primary">
Simpan
</button>
</div>
</div>
</form>
</div>
@endsection