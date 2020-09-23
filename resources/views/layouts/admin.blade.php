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
    <link rel="stylesheet"  href="{{ asset('main/css/icofont.css') }}">
    <link rel="stylesheet"  href="{{ asset('main/css/themify.css') }}">
    <link rel="stylesheet"  href="{{ asset('main/css/flag-icon.css') }}">
    <link rel="stylesheet"  href="{{ asset('main/css/feather-icon.css') }}">
    <link rel="stylesheet"  href="{{ asset('main/css/animate.css') }}">
    <link rel="stylesheet"  href="{{ asset('main/summernote.css')}}">
    <link rel="stylesheet"  href="{{ asset('main/css/chartist.css') }}">
    <link rel="stylesheet"  href="{{ asset('main/css/owlcarousel.css') }}">
    <link rel="stylesheet"  href="{{ asset('main/css/prism.css') }}">
    <link rel="stylesheet"  href="{{ asset('main/css/sweetalert2.css') }}">
    <link rel="stylesheet"  href="{{ asset('main/css/bootstrap.css') }}">
    <link rel="stylesheet"  href="{{ asset('main/css/datatables.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="{{ asset('main/css/style.css') }}">
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

    </style>
  </head>
  <body main-theme-layout="rtl">

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

    <div class="page-wrapper compact-wrapper" id="pageWrapper">

      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{ asset('images/' . $setting->logo) }}" alt=""></a></div>
          </div>
          <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"></i></div>

          <div class="nav-right col pull-right right-menu">
            <ul class="nav-menus">

              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="onhover-dropdown p-0">
                <div class="media profile-media"><img class="b-r-10" src="{{ asset('images/' . Auth::user()->avatar )}}" alt="" style="width: 40px;">
                  <div class="media-body"><span></span>
                    <p class="mb-0 font-roboto">{{ Auth::user()->name }} <i class="middle fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><i data-feather="user"></i><span> <a href="{{ route('dashboard.profile.index') }}"> الحساب الشخصي </a> </span></li>
                  <li><i data-feather="log-out"> </i><span>
                       <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="waves-effect">
                    <i class="zmdi zmdi-chart-donut text-success"></i>  تسجيل الخروج
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form></a> </span></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>

      <div class="page-body-wrapper sidebar-icon">

        <header class="main-nav">
          <div class="logo-wrapper">
              <a href=" "><img class="img-fluid" src="{{ asset('images/' . $setting->logo) }}" style="width: 50px;margin: 0 auto;display: block;" alt=""></a></div>
          <div class="logo-icon-wrapper">
              <a href="{{ route('dashboard.')}}"><img class="img-fluid" src="{{ asset('images/' . $setting->logo) }}" style="width: 30px;" alt=""></a>
            </div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn"> <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>  </li>
                  <li><a class="nav-link" href="{{ route('dashboard.')}}"><i data-feather="home"></i><span>الرئيسيه</span></a> </li>
                  <li class="dropdown"><a class="nav-link" href="{{ route('dashboard.reservation.index') }}"><i data-feather="airplay"></i><span> الحجوزات</span>  @if($reservscount > 0) <label class="badge badge-danger"> {{ $reservscount }}</label> @endif</a> </li>
                  <li class="dropdown"><a class="nav-link" href="{{ route('dashboard.slider.index') }}"><i data-feather="box"></i><span> الجزء العلوي</span></a></li>
                  <li class="dropdown"><a class="nav-link" href="{{ route('dashboard.about.index') }}"><i data-feather="layout"></i><span>من نحن</span></a> </li>
                  <li class="dropdown"><a class="nav-link" href="{{ route('dashboard.latest.index') }}"><i data-feather="command"></i><span>رؤيتنا</span></a> </li>
                  <li class="dropdown"><a class="nav-link" href="{{ route('dashboard.blog.index') }}"><i data-feather="folder-plus"></i><span>المقالات</span></a> </li>
                  <li class="dropdown"><a class="nav-link" href="{{ route('dashboard.test.index') }}"><i data-feather="edit-3"></i><span>اراء العملاء</span> @if($testcount > 0) <label class="badge badge-danger"> {{ $testcount }}</label> @endif </a> </li>
                   <!-- <li class="dropdown"><a class="nav-link" href="@{{ route('dashboard.openion') }}"><i data-feather="edit-3"></i><span> تصويت العملاء</span>  </a> </li>  error in not found  -->
                  <li class="dropdown"><a class="nav-link" href="{{ route('dashboard.team.index') }}"><i data-feather="cloud-drizzle"></i><span>فريق العمل</span></a>  </li>
                  <li class="dropdown"><a class="nav-link" href="{{ route('dashboard.partner.index') }}"><i data-feather="cloud"></i><span>شركاء النجاح</span></a> </li>
                  <li class="dropdown"><a class="nav-link" href="{{ route('dashboard.mail.index') }}"><i data-feather="file-text"></i><span>البريد</span> @if($mailcount > 0) <label class="badge badge-danger"> {{ $mailcount }}</label> @endif </a> </li>
                  <li class="dropdown"><a class="nav-link" href="{{ route('dashboard.product.index') }}"><i data-feather="server"></i><span>المنتجات</span></a></li>
                  <li class="dropdown"><a class="nav-link" href="{{ route('dashboard.service.index') }}"><i data-feather="bar-chart"></i><span>الخدمات</span></a></li>
                  <li class="dropdown"><a class="nav-link" href="{{ route('dashboard.project.index') }}"><i data-feather="grid"> </i><span> الاحداث والمناسبات</span></a> </li>
                  <li class="dropdown"><a class="nav-link" href="{{ route('dashboard.video.index') }}"><i data-feather="video"></i><span> الفيديو</span></a></li>
                  <li class="mega-menu"><a class="nav-link" href="{{ route('dashboard.setting.index') }}"><i data-feather="layers"></i><span>الاعدادات</span></a>  </li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </header>
        <!-- Page Sidebar Ends-->


  @yield('content')


       </div>
    </div>

    <script src="{{ asset('main/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('main/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('main/js/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('main/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('main/js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('main/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('main/js/config.js') }}"></script>
    <script src="{{ asset('main/js/chart/chartist/chartist.js') }}"></script>
    <script src="{{ asset('main/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('main/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('main/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('main/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('main/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('main/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('main/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('main/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('main/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('main/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('main/js/dashboard/dashboard_2.js') }}"></script>
    <script src="{{ asset('main/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('main/js/sweet-alert/app.js') }}"></script>
    <script src="{{ asset('main/js/tooltip-init.js') }}"></script>
    <script src="{{ asset('main/js/script.js') }}"></script>


    <script>

      $('.delete-btn').on('click', function () {

        return confirm("هل انت متأكد ؟");
      });


    </script>

   @php if(session()->has('message')){  @endphp

    <script> swal("Good job!", "<?php echo session()->get('message') ?>", "success");   </script>

    @php }  @endphp


    @stack('js')
  </body>


</html>
