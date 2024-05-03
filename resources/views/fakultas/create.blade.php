@extends('layouts.app')
@section('content')
<div class="container">
<h1>{{ __('Fakultas') }}</h1>
<form method="post" action="{{ url('/fakultas/store') }}">
@csrf
<div class="row mb-3">
<label for="nama_fakultas" class="col-3 col-form-label">Fakultas</label>
<div class="col-9">
<input type="text" class="form-control" id="nama_fakultas"
name="nama_fakultas" value="{{ old('nama_fakultas') }}"/>
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