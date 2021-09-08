@extends('layouts.backend')

@section('title', 'Profile')

@section('content')
<x-section-header heading="Profile" breadcrumb="profile" />
<x-section-sub-header title="Hai, {{ Str::words(auth()->user()->name, 1, '') }} !"
  lead="Ubah informasi profilemu di halaman ini." />

<div class="row mt-sm-4">
  <div class="col-12 col-md-12 col-lg-5">
    <div class="card profile-widget">
      <div class="profile-widget-header">
        <center>
          <i class="fa fa-user" aria-hidden="true"></i>
        </center>
      </div>
      
      <div class="card text-dark">
        <span style="margin-left: 2em">Nama Lengkap</span>
        <span style="margin-left: 2em"><strong><?= Auth::user()->name; ?> </strong></span>
        <span style="margin-left: 2em">Alamat Email</span>
        <span style="margin-left: 2em"><strong><?= Auth::user()->email; ?> </strong></span>
      </div>
      
    </div>

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::twoFactorAuthentication()))
    @include('profile.two-factor-authentication-form')
    @endif
  </div>
  <div class="col-12 col-md-12 col-lg-7">
    @if (session('status'))
    <div class="alert alert-primary alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>&times;</span>
        </button>
        @if (session('status')=='profile-information-updated')
        Profile has been updated.
        @endif
        @if (session('status')=='password-updated')
        Password has been updated.
        @endif
        @if (session('status')=='two-factor-authentication-disabled')
        Two factor authentication disabled.
        @endif
        @if (session('status')=='two-factor-authentication-enabled')
        Two factor authentication enabled.
        @endif
        @if (session('status')=='recovery-codes-generated')
        Recovery codes generated.
        @endif
      </div>
    </div>
    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
    @include('profile.update-profile-information-form')
    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
    @include('profile.update-password-form')
    @endif
  </div>
</div>
@endsection