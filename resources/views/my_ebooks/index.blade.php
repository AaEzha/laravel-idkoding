@extends('layouts.backend')

@section('title', 'My Ebooks')

@section('content')
<div class="card">
    <div class="card-header font-weight-bold">
        <div class="w-100 d-flex justify-content-between">
            <h4>EBOOK SAYA</h4>

            <div class="text-right">
                <a href="{{ route('ebooks.index') }}" class="btn btn-danger">Lihat Semua Ebook</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">

            @php
            function percentageOf( $number, $everything, $decimals = 2 ){
                return round( $number / $everything * 100, $decimals );
            }
            @endphp

            @foreach($my_ebooks as $my_ebook)
            <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                <div class="media">
                    <img src="{{ $my_ebook->ebook->image }}" alt="{{ $my_ebook->ebook->judul_ebook }}" class="mr-3" style="height: 350px;object-fit: cover;border-radius: .5rem;background:#ffffff">
                    <div class="media-body">
                        @php
                        $subebooks_ids = $my_ebook->ebook->subebooks->pluck('id');
                        $check = DB::table('subebooksayas')->where(function ($q) use ($subebooks_ids) {
                            return $q->where('id_user', Auth::id())
                                ->whereIn('id_subebook', $subebooks_ids);
                        })->count();

                        @endphp

                        <div class="mb-2" style="color: #696666;">
                            <strong>{{ number_format($check) }}</strong>
                            dari
                            <strong>{{ number_format($my_ebook->ebook->subebooks()->count()) }}</strong>
                            modul telah selesai
                        </div>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{ percentageOf($check, $subebooks_ids->count())  }}%;">
                                {{ percentageOf($check, $subebooks_ids->count())  }}%
                            </div>
                        </div>
                        <h5 class="mt-2">{{ $my_ebook->ebook->judul_ebook }}</h5>
                        <a href="{{ route('my_ebooks.show', $my_ebook->ebook->slug) }}" class="btn shadow btn-success btn-md mt-3">
                            LANJUTKAN BELAJAR
                        </a>

                        @if($my_ebook->ebook->link_telegram)
                        <a href="{{ $my_ebook->ebook->link_telegram }}" class="btn shadow btn-info btn-md mt-3">Group Telegram</a>
                        @endif


                        <!-- @if ($subebooks_ids->count() == $check)
                        <a href="#" class="btn shadow btn-info btn-md mt-3">Download Sertifikat</a>
                        @endif -->

                        <hr>
                        <div>
                            Licensed to :
                            <p>
                                <b>{{ Auth::user()->name }}</b> <i>({{ Auth::user()->email }})</i>
                                — {{ $my_ebook->created_at }}
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            @endforeach

        </div>

        {{ $my_ebooks->links() }}
    </div>
</div>
@endsection
