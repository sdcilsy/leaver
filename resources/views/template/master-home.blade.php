<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>@yield('title')</title>
  <!-- Favicon -->
  <link href="{{ asset('assets/img/brand/favicon.png') }}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('assets/css/argon.css?v=1.1.0') }}" rel="stylesheet">
</head>

<body>
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="{{ url('/') }}">
          <img src="{{ asset('assets/img/brand/white.png') }}" alt="brand">
        </a>
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="./index.html">
                  <img src="{{ asset('assets/img/brand/white-black.png') }}" alt="brand">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </nav>
  </header>
  @yield('body')
  <!-- Core -->
  <script src="{{asset("assets/vendor/jquery/jquery.min.js")}}"></script>
  <script src="{{asset("assets/vendor/popper/popper.min.js")}}"></script>
  <script src="{{asset("assets/vendor/bootstrap/bootstrap.min.js")}}"></script>
  <script src="{{asset("assets/vendor/headroom/headroom.min.js")}}"></script>
  <!-- Argon JS -->
  <script src="{{asset("assets/js/argon.js?v=1.1.0")}}"></script>
</body>

</html>
