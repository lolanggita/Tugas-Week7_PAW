@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            Detail Buku
        </div>
        <div class="card-body">
            <h3>{{ $book->title }}</h3>
            <dl class="row">
                <dt class="col-sm-3">ISBN</dt>
                <dd class="col-sm-9">{{ $book->isbn }}</dd>

                <dt class="col-sm-3">Penulis</dt>
                <dd class="col-sm-9">{{ $book->author }}</dd>

                <dt class="col-sm-3">Harga</dt>
                <dd class="col-sm-9">Rp{{ number_format($book->price, 2) }}</dd>

                <dt class="col-sm-3">Deskripsi</dt>
                <dd class="col-sm-9">{{ $book->description }}</dd>
            </dl>
            <a href="{{ url('/') }}" class="btn btn-outline-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection