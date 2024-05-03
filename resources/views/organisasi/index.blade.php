@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ __('Organisasi') }}</h1>
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-large btn-primary" href="{{ url('/organisasi/create') }}">Tambah Organisasi</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>Organisasi</th>
                <th>Nama Ketua</th> 
                <th>Fakultas</th> 
                <th>Prodi</th> 
            </tr>
        </thead>
        <tbody>
            @forelse ($organisasis as $organisasi)
            <tr>
                <td class="d-flex">
                
                    <a href="{{ url('/organisasi/edit/'.$organisasi->id) }}"class="btn btn-primary">Edit</a>&nbsp;
                    <form action="{{ url('/organisasi/destroy/'.$organisasi->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
                <td>{{ $organisasi->nama_organisasi }}</td>
                <td>{{ $organisasi->nama_ketua }}</td>
                <td>
                    @if ($organisasi->fakultas)
                        {{ $organisasi->fakultas->nama_fakultas }}
                    @else
                        N/A
                    @endif
                </td>
                <td>
                @if ($organisasi->prodi)
                        {{ $organisasi->prodi->nama_prodi }}
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
    @if($organisasis)
    {{ $organisasis->links() }}
    @endif
</div>

@endsection