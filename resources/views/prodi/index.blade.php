@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ __('Prodi') }}</h1>
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-large btn-primary" href="{{ url('/prodi/create') }}">Tambah Prodi</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>Prodi</th>
                <th>Fakultas</th> 
            </tr>
        </thead>
        <tbody>
            @forelse ($prodis as $prodi)
            <tr>
                <td class="d-flex">
                
                    <a href="{{ url('/prodi/edit/'.$prodi->id) }}"class="btn btn-primary">Edit</a>&nbsp;
                    <form action="{{ url('/prodi/destroy/'.$prodi->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
                <td>{{ $prodi->nama_prodi }}</td>
                <td>
                    @if ($prodi->fakultas)
                        {{ $prodi->fakultas->nama_fakultas }}
                    @else
                        N/A
                    @endif
                </td>
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
    @if($prodis)
    {{ $prodis->links() }}
    @endif
</div>

@endsection