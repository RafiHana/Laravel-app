@extends('layouts.app')
@section('content')
<div class="container">
<h1>{{ __('Fakultas') }}</h1>
<div class="row">
<div class="col-md-12">
<a class="btn btn-large btn-primary"
href="{{ url('/fakultas/create') }}">Tambah Fakultas</a>
</div>
</div>
<table class="table table-striped">
<thead>
<tr>
<th>&nbsp;</th><th>Fakultas</th>
</tr>
</thead>
<tbody>
@forelse ($fakultas as $fa)
<tr>
<td class="d-flex">
<a href="{{ url('/fakultas/edit/'.$fa->id) }}"class="btn btn-primary">Edit</a>
&nbsp;
<form action="{{ url('/fakultas/destroy/'.$fa->id) }}"
method="POST">

@csrf

<button type="submit" class="btn btn-danger"
onclick="return confirm('Are you sure?')">
Delete
</button>
</form>
</td>
<td>{{ $fa->nama_fakultas }}</td>
</tr>
@empty
<tr>
<td colspan="2">
<div class="alert alert-warning">
Tidak ada data!
</div>
</td>
</tr>
@endforelse
</tbody>
</table>
@if($fakultas)
{{ $fakultas->links() }}
@endif
</div>
@endsection