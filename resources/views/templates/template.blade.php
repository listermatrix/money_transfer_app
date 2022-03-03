<!DOCTYPE html>
<html lang="en">
@include('parts.head')
<body class="lato">


@include('parts.menu')

<div class="main-content" id="panel">
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-gradient-success border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center ml-md-auto">
                    <li class="nav-item d-xl-none">
                        <!-- Sidenav toggler -->
                        <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </li>

                </ul>
                <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
{{--                    <img alt="Image" src="{{asset("img/new.png")}}">--}}
                  </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold text-capitalize">{{Auth::user()->username}}</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>My profile</span>
                            </a>
                            {{--<a href="#!" class="dropdown-item">--}}
                                {{--<i class="ni ni-settings-gear-65"></i>--}}
                                {{--<span>Settings</span>--}}
                            {{--</a>--}}
                            {{--<a href="#!" class="dropdown-item">--}}
                                {{--<i class="ni ni-calendar-grid-58"></i>--}}
                                {{--<span>Activity</span>--}}
                            {{--</a>--}}
{{--                            <a href="{{route('password.change')}}" class="dropdown-item text-orange">--}}
{{--                                <i class="fa fa-lock"></i>--}}
{{--                                <span>Reser Password</span>--}}
{{--                            </a>--}}
                            <div class="dropdown-divider"></div>
                            <a href="{{route('dashboard.logout')}}" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="header bg-gradient-success pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">SIMBA APP</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"></li>

                            </ol>
                        </nav>
                    </div>


                </div>
                <!-- Card stats -->
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">USD</h5>
                                        <span class="h2 font-weight-bold mb-0">{{0}}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                            <i class="ni ni-active-40"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
{{--                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ $tot != 0 ? ($ms/$tot) * 100 .'%' : '0' .'%' }}</span>--}}
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->

                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">EUR</h5>
                                        <span class="h2 font-weight-bold mb-0">{{0}}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                            <i class="ni ni-chart-pie-35"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
{{--                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ $tot != 0 ? ($und/$tot) * 100 .'%' : '0' .'%' }}</span>--}}
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">NGN</h5>
                                        <span class="h2 font-weight-bold mb-0">{{0}}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                            <i class="ni ni-money-coins"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
{{--                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ $tot != 0 ? ($dip/$tot) * 100 .'%' : '0' .'%' }}</span>--}}
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">TOTAL TRANSFERS</h5>
                                        <span class="h2 font-weight-bold mb-0">{{0}}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                            <i class="ni ni-chart-bar-32"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
{{--                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ $tot != 0 ? (($tot/$tot) * 100) .'%' : '0' .'%' }}</span>--}}
{{--                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ $tot != 0 ? ($tot/$tot) * 100 .'%' : '0' .'%' }}</span>--}}
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--6">

        @yield('content')


        @include('parts.footer')
    </div>
</div>
<script src="{{asset("vendor/jquery/dist/jquery.min.js") }}"></script>
<script src="{{asset("vendor/bootstrap/dist/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{asset("vendor/js-cookie/js.cookie.js")}}"></script>

<script src="{{asset("vendor/jquery.scrollbar/jquery.scrollbar.min.js")}}"></script>
<script src="{{asset("vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js")}}"></script>
<script src="{{asset("vendor/lavalamp/js/jquery.lavalamp.min.js")}}"></script>

{{--<script src="{{asset('vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>--}}
<script src="{{asset('sweet/sweetalert.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

<script src="{{asset("vendor/select2/dist/js/select2.min.js")}}"></script>
<script src="{{asset("vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")}}"></script>

<script src="{{asset('vendor/nouislider/distribute/nouislider.min.js')}}"></script>
<script src="{{asset('vendor/quill/dist/quill.min.js')}}"></script>
<script src="{{asset('vendor/dropzone/dist/min/dropzone.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>

<script src="{{asset("vendor/chart.js/dist/Chart.min.js")}}"></script>
<script src="{{asset("vendor/chart.js/dist/Chart.extension.js")}}"></script>


@stack('datatables')
@stack('calender')
<script src="{{asset("js/argon.min.js")}}"></script>
<script>
    // $('.page_link').html('<i class="fas fa-angle-left"></i>');
    // $('#datatable-buttons .page_link').html('hello');
</script>

{{--<script src="{{asset('js/tail.datetime-full.js')}}"></script>--}}
{{--<script src="{{asset('js/tail.datetime-all.js')}}"></script>--}}
{{--<script>--}}
{{--    tail.DateTime(".datetime", {--}}
{{--        position: "bottom",--}}
{{--        startOpen: false,--}}
{{--        stayOpen: false,--}}
{{--        timeHours: true,--}}
{{--        timeMinutes: true,--}}
{{--        timeSeconds: true,--}}
{{--    });--}}
{{--</script>--}}
@stack('date')

@stack('scripts')
</body>
</html>

