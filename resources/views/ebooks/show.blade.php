@extends('layouts.app')

@section('title', $ebook->judul_ebook)

@section('content')
<div class="container">

    <div class="row pt-4">
        <div class="col-md-8">
            <h1>{{ $ebook->judul_ebook }}</h1>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="{{ $ebook->image }}" class="card-img-top" alt="{{ $ebook->judul_ebook }}">

                <a href="{{ route('my_ebooks.show', $ebook->slug) }}" class="btn btn-primary btn-block btn-lg">Dapatkan</a>
            </div>
        </div>
    </div>

</div>
@endsection
