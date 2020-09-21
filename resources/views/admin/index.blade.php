@extends('layouts.admin')

@section('content')

<style>

    .ecommerce-widgets .fa{
        font-size: 24px;
background: -webkit-gradient(linear, left top, right top, color-stop(10%, #7366ff), to(#a927f9));
background: linear-gradient(to right, #7366ff 10%, #a927f9 100%);
    background-clip: border-box;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
margin-top: 2px;
    }

</style>
<div class="page-body">
  <div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3> <i data-feather="home"></i> الرئيسيه</h3>

        </div>

      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row size-column">
      <div class="col-xl-7 box-col-12 xl-100">
        <div class="row dash-chart">


            <div class="box-col-6 col-md-4">
                <div class="card o-hidden">
                  <div class="card-body">
                    <div class="ecommerce-widgets media">
                      <div class="media-body">
                        <h4>الحجوزات</h4>
                        <h4 class="f-w-500 mb-0 f-26"><span class="counter"> {{ $reservscount }}</span></h4>
                      </div>
                      <div class="ecommerce-box light-bg-primary"><i class="fa fa-heart" aria-hidden="true"></i></div>
                    </div>
                  </div>
                </div>
              </div>

          <div class="box-col-6 col-md-4">
            <div class="card o-hidden">
              <div class="card-body">
                <div class="ecommerce-widgets media">
                  <div class="media-body">
                    <h4>المقالات</h4>
                    <h4 class="f-w-500 mb-0 f-26"><span class="counter">{{ $blogsCounnt  }}</span></h4>
                  </div>
                  <div class="ecommerce-box light-bg-primary"><i class="fa fa-edit" aria-hidden="true"></i></div>
                </div>
              </div>
            </div>
          </div>

          <div class="box-col-6 col-md-4">
            <div class="card o-hidden">
              <div class="card-body">
                <div class="ecommerce-widgets media">
                  <div class="media-body">
                    <h4>المنتجات</h4>
                    <h4 class="f-w-500 mb-0 f-26"><span class="counter">{{ $productCount }}</span></h4>
                  </div>
                  <div class="ecommerce-box light-bg-primary"><i class="fa fa-bar-chart" aria-hidden="true"></i></div>
                </div>
              </div>
            </div>
          </div>

          <div class="box-col-6 col-md-4">
            <div class="card o-hidden">
              <div class="card-body">
                <div class="ecommerce-widgets media">
                  <div class="media-body">
                    <h4>الخدمات</h4>
                    <h4 class="f-w-500 mb-0 f-26"><span class="counter">{{ $servicesCount }}</span></h4>
                  </div>
                  <div class="ecommerce-box light-bg-primary"><i class="fa fa-battery" aria-hidden="true"></i></div>
                </div>
              </div>
            </div>
          </div>


          <div class="box-col-6 col-md-4">
            <div class="card o-hidden">
              <div class="card-body">
                <div class="ecommerce-widgets media">
                  <div class="media-body">
                    <h4>الاراء</h4>
                    <h4 class="f-w-500 mb-0 f-26"><span class="counter">{{ $testsCount}}</span></h4>
                  </div>
                  <div class="ecommerce-box light-bg-primary"><i class="fa fa-pencil" aria-hidden="true"></i></div>
                </div>
              </div>
            </div>
          </div>


          <div class="box-col-6 col-md-4">
            <div class="card o-hidden">
              <div class="card-body">
                <div class="ecommerce-widgets media">
                  <div class="media-body">
                    <h4>الفريق</h4>
                    <h4 class="f-w-500 mb-0 f-26"><span class="counter">{{ $teamCount }}</span></h4>
                  </div>
                  <div class="ecommerce-box light-bg-primary"><i class="fa fa-user-plus" aria-hidden="true"></i></div>
                </div>
              </div>
            </div>
          </div>


          <div class="box-col-6 col-md-4">
            <div class="card o-hidden">
              <div class="card-body">
                <div class="ecommerce-widgets media">
                  <div class="media-body">
                    <h4>الشركاء</h4>
                    <h4 class="f-w-500 mb-0 f-26"><span class="counter">{{ $partnerCount }}</span></h4>
                  </div>
                  <div class="ecommerce-box light-bg-primary"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                </div>
              </div>
            </div>
          </div>


          <div class="box-col-6 col-md-4">
            <div class="card o-hidden">
              <div class="card-body">
                <div class="ecommerce-widgets media">
                  <div class="media-body">
                    <h4>المناسبات</h4>
                    <h4 class="f-w-500 mb-0 f-26"><span class="counter"> {{ $projectsCount }}</span></h4>
                  </div>
                  <div class="ecommerce-box light-bg-primary"><i class="fa fa-building-o" aria-hidden="true"></i></div>
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
  </div>

</div>

@endsection

