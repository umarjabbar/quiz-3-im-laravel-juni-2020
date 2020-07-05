@extends('layouts.master')

@section('title', 'Artikel terbaru')

@section('content')

<a href="{{ url('/artikel/create')}}" class="btn btn-info my-4">Tambah</a>
<div class="card">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Isi</th>
            <th scope="col">Slug</th>
            <th scope="col">Tag</th>
            <th scope="col" width="20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($artikels as $artikel)
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $artikel->judul }}</td>
            <td>{{ $artikel->isi }}</td>
            <td>{{ $artikel->slug }}</td>
            <td>{{ $artikel->tag }}</td>
            <td>
                <a href="/artikel/{{ $artikel->id }}" class="btn btn-info">Detail</a>
                <a href="/artikel/{{ $artikel->id }}/edit" class="btn btn-warning">
                <i class="fas fa-fw fa-edit"></i>
                </a>
                <form action="/artikel/{{ $artikel->id }}" method="POST" class="d-inline">
                @method('delete')@csrf
                    <button class="btn btn-danger"><i class="fas fa-fw fa-trash"></i></button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

@push('scripts')

<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>

@endpush