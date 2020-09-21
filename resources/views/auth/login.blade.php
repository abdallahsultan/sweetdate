<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $setting->meta }}">
    <meta name="keywords" content="{{ $setting->meta }}">
    <meta name="author" content="Mokhtar Ali">
    <link rel="icon" href="{{ asset('images/' . $setting->favicon) }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/' . $setting->favicon) }}" type="image/x-icon">
    <title>{{ $setting->name }}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/icofont.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/themify.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/flag-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/animate.css') }}">
    <link rel="stylesheet"  href="{{ asset('main/summernote.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    <link id="color" rel="stylesheet" href="{{ asset('main/css/color-1.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/responsive.css') }}">
    <style>
      .page-wrapper.compact-wrapper .page-body-wrapper.sidebar-icon header.main-nav .main-navbar .nav-menu li a span,
      body, .page-wrapper .page-body-wrapper .page-header .breadcrumb li {

        font-family: 'Cairo', sans-serif;
    }

    .page-wrapper.compact-wrapper .page-body-wrapper.sidebar-icon header.main-nav .main-navbar .nav-menu > li.dropdown .badge {
      position: absolute;
      left: 30px;
      top: 14.5px;
      padding: 0.44em 0.7em 0.32em;
  }

  .cont {
    overflow: hidden;
    position: relative;
    width: 400px;
    margin: 0 auto 0;
    background: #ffffff82;
    padding: 30px;
    border-radius: 12px;
    margin-top: 250px;
}

.theme-form{
    width: 100%;

}
    </style>
  </head>
  <body style="background: url('images/login.jpg');background-size: cover;background-repeat: no-repeat;background-attachment: fixed;">
<div class="overlay" style="position: absolute;top: 0;left: 0;background: #0009;width: 100%;height: 100%;"></div>
    <div class="loader-wrapper">
      <div class="loader-index"><span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">    </fecolormatrix>
        </filter>
      </svg>
    </div>

    <div class="page-wrapper">
      <div class="container-fluid p-0">

        <div class="authentication-main mt-0">
          <div class="row">
            <div class="col-md-12">

                <div class="authentication-box">
                  <div class="mt-4">
                    <div class="card-body p-0">
                      <div class="cont text-center">
                        <div>
                          <form class="theme-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <h4>تسجيل الدخول</h4>

                            <div class="form-group">
                              <label class="col-form-label pt-0">البريد الالكتروني</label>
                              <input class="form-control" type="email" required="" name="email" value="{{ old('email') }}">
                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                            <div class="form-group">
                              <label class="col-form-label">كلمه المرور</label>
                              <input class="form-control" type="password" required="" name="password">
                            </div>

                            <div class="form-group row mt-3 mb-0">
                              <button class="btn btn-primary btn-block" type="submit">تسجيل الدخول</button>
                            </div>

                          </form>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>


    <script src="{{ asset('main/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('main/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('main/js/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('main/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('main/js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('main/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('main/js/config.js') }}"></script>
    <script src="{{ asset('main/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('main/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('main/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('main/js/dashboard/dashboard_2.js') }}"></script>
    <script src="{{ asset('main/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('main/js/script.js') }}"></script>
  </body>

</html>
