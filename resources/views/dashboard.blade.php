@extends('layouts.app') {{-- Perbaikan sintaks @extends --}}

@section('content') {{-- Perbaikan sintaks @section --}}
<div class="container">
    <h2>Gudang Buku</h2>
    <div class="row">
        @foreach($books as $book)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm book-card" onclick="window.location='{{ route('books.show;', $books->id) }}'" style="cursor: pointer;">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->title }}</h5> {{-- Perbaikan sintaks Blade --}}
                    <p class="text-muted">{{ $book->author }}</p>
                    <div class="badge bg-primary">
                        Stok: {{ $book->quantity }}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .book-card:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease;
    }
</style>
@endsection