@extends('layouts.backend')

@section('title', 'Dashboard')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="text-dark">
              Hai, <strong><?=Auth::user()->name;?> </strong> Selamat datang kembali.
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <a class="card card-statistic-1" href="{{ route('my_ebooks.index') }}">
                <div class="card-icon bg-primary">
                    <i class="fa fa-book text-white fa-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                    <h4>EBOOK SAYA</h4>
                    </div>
                    <div class="card-body">
                        {{ $ebook ? $ebook : '0'}}
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fa fa-graduation-cap text-white fa-2x"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                    <h4>SERTIFIKAT</h4>
                    </div>
                    <div class="card-body">
                    {{ $sertifikat ? $sertifikat : '0'}}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection
