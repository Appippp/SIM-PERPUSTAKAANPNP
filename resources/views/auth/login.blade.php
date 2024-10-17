<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login E-PERPUS PNP</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('template/dist/assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/dist/assets/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('template/dist/assets/modules/bootstrap-social/bootstrap-social.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('template/dist/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('template/dist/assets/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="{{ asset('image/logo.PNG') }}" alt="logo" width="80" class="shadow-light rounded-circle">
            </div>
            <div class="card card-primary">
             

              <div class="card-body">
                <form method="POST" action="{{ route('login-proses') }}" >
                  @csrf

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email"  class="form-control @error('email') is-invalid @enderror"   autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                      </div>
                    </div>
                    <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror"   >
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>


                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
          

              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('template/dist/assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/popper.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/tooltip.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('template/dist/assets/modules/moment.min.js') }}"></script>
  <script src="{{ asset('template/dist/assets/js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{ asset('template/dist/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('template/dist/assets/js/custom.js') }}"></script>


</body>
</html>