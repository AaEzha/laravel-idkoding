<!DOCTYPE html>
<html lang="lang=" {{ str_replace('_', '-', app()->getLocale()) }}"">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('stisla/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/modules/fontawesome/css/all.min.css') }}">
  <!-- Plugins -->
  <link rel="stylesheet" href="{{ asset('stisla/modules/bootstrap-social/bootstrap-social.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('stisla/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('stisla/css/components.css') }}">
  <!-- Page Specific CSS File -->
  @yield('css')
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <x-navbar />

            <div>
                <!-- Sidebar outter -->
                <div class="main-sidebar sidebar-style-2" style="background-color: #dce6f1;">
                    <!-- sidebar wrapper -->
                    <aside id="sidebar-wrapper">
                        <!-- sidebar brand -->
                        <div class="sidebar-brand" style="background-color: #fff;">
                            <a href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a>
                        </div>

                        <div class="p-4">
                            @foreach($ebook->subebooks->groupBy('parent_judul') as $judul => $subebooks)
                            <h5 class="mt-2">{{ $judul }}</h5>
                                @foreach($subebooks as $subebook)
                                <div class="list-group mb-1">
                                    <a href="{{ route('my_ebooks.show', ['slug' => $ebook->slug, 'id_subebook' => $subebook->id]) }}" class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $subebook->judul_subebook }}

                                        @if($subebook->subebooksayas->contains(Auth::id()))
                                        <span class="badge">
                                            <i class="fas fa-check-circle text-success"></i>
                                        </span>
                                        @endif
                                    </a>
                                </div>
                                @endforeach
                            @endforeach
                        </div>

                    </aside>
                </div>
            </div>


            <div class="main-content">
                <section class="section">
                    @yield('content')
                </section>
            </div>
            <footer class="main-footer center">
                <center>
                    <span>
                        Copyright &copy;
                        <script type="text/javascript">
                            document.write(new Date().getFullYear());
                        </script>
                        <div class="bullet"></div>
                        IDKODING
                        <div class="bullet">
                        </div> All Rights Reserved.
                    </span>
                </center>
            </footer>
        </div>
    </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('stisla/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('stisla/modules/popper.js') }}"></script>
  <script src="{{ asset('stisla/modules/tooltip.js') }}"></script>
  <script src="{{ asset('stisla/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('stisla/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('stisla/modules/moment.min.js') }}"></script>
  <script src="{{ asset('stisla/js/stisla.js') }}"></script>

  <!-- Plugins -->
  @yield('plugin')
  <!-- Page Specific JS File -->
  @yield('js')
  <!-- Template JS File -->
  <script src="{{ asset('stisla/js/scripts.js') }}"></script>
  <script src="{{ asset('stisla/js/custom.js') }}"></script>
</body>

</html>
