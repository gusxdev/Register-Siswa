{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

{{-- =================================================================================== --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

        <!-- Favicon -->
        <link href="{{ asset('kidkinder') }}/img/favicon.ico" rel="icon" />

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
          href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"
          rel="stylesheet"
        />
    
        <!-- Font Awesome -->
        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
          rel="stylesheet"
        />
    
        <!-- Flaticon Font -->
        <link href="{{ asset('kidkinder') }}/lib/flaticon/font/flaticon.css" rel="stylesheet" />
    
        <!-- Libraries Stylesheet -->
        <link href="{{ asset('kidkinder') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
        <link href="{{ asset('kidkinder') }}/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('kidkinder') }}/css/style.css" rel="stylesheet" />
</head>
<body>
    
<div class="container-fluid py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <div class="card border-0">
            <div class="card-header bg-secondary text-center p-4">
              <h1 class="text-white m-0">Register</h1>
            </div>
            <div class="card-body rounded-bottom bg-primary p-5">
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama Lengkap">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukan Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Masukan Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password">
                </div>
                <div>
                  <button class="btn btn-secondary btn-block border-0 py-3" type="submit">
                    Register Now!
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('kidkinder') }}/lib/easing/easing.min.js"></script>
  <script src="{{ asset('kidkinder') }}/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="{{ asset('kidkinder') }}/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="{{ asset('kidkinder') }}/lib/lightbox/js/lightbox.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="{{ asset('kidkinder') }}/mail/jqBootstrapValidation.min.js"></script>
  <script src="{{ asset('kidkinder') }}/mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="{{ asset('kidkinder') }}/js/main.js"></script>
  @include('sweetalert::alert')
  @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>
</html>