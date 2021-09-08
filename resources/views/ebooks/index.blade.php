@extends('layouts.app')

@section('title', 'Ebooks')

@section('content')
<div class="container">
    <div class="row pt-4">
        @foreach($ebooks as $ebook)
        <div class="col-md-4">
            <a class="card" href="{{ route('ebooks.show', $ebook->slug) }}">
                <img src="{{ $ebook->image }}" class="card-img-top" alt="{{ $ebook->judul_ebook }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $ebook->judul_ebook }}</h5>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
