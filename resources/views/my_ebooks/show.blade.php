@extends('layouts.blank')

@section('title', $ebook->judul_ebook)

@section('content')

<div class="alert alert-success">
    Licensed to : <b>{{ Auth::user()->name }}</b> <i>({{ Auth::user()->email }})</i> — {{ $my_ebook->created_at }}
</div>

<div class="card">
    <div class="card-header">
        <div class="w-100 d-flex justify-content-between">
            <h4>{{ $subebook->judul_subebook }}</h4>

            <div class="text-right">
                <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#perbaikan">PDF</a>
                <a href="{{ route('dashboard') }}" class="btn btn-primary">Kembali Ke Dashboard</a>
            </div>
        </div>
    </div>
    <div class="card-body lead">
        {!! $subebook->content !!}
    </div>

    @if($next_subebook)
    <div class="card-footer text-right">
        <a href="{{ route('my_ebooks.show', ['slug' => $ebook->slug, 'id_subebook' => $next_subebook->id, 'done_id' => request()->input('id_subebook')]) }}" class="btn btn-primary">
            Selanjutnya
        </a>
    </div>
    @else
    <div class="card-footer text-right">
        <a href="{{ route('my_ebooks.show', ['slug' => $ebook->slug, 'id_subebook' => $subebook->id, 'done_id' => request()->input('id_subebook')]) }}" class="btn btn-success">
            Selesai Belajar
        </a>
    </div>
    @endif
</div>
@endsection

@section('css')
<style type="text/css">
.main-content img{
    max-width: 100%;
}
</style>
@endsection

@section('plugin')
<div class="modal fade" id="perbaikan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sedang diperbaiki</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Sedang diperbaiki
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
