<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-layout-style="default" data-layout-position="fixed" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-layout-width="fluid">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.8">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @props(['title' => config('app.name', 'H&I Council')])
        <title>{{ $title }}</title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('public/backend')}}/images/favicon.ico">
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{asset('public/backend')}}/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="{{asset('public/backend')}}/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="{{asset('public/backend')}}/css/style.css">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="{{asset('public/backend')}}/images/favicon.ico" />

        @stack('style')
    </head>
    <body>
        <div class="container-scroller">
            <div class="row p-0 m-0 proBanner" id="proBanner">
                <div class="col-md-12 p-0 m-0">
                    <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                        <div class="ps-lg-1">
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and
                                    more with this template!</p>
                                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                    target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i
                                    class="mdi mdi-home me-3 text-white"></i></a>
                            <button id="bannerClose" class="btn border-0 p-0">
                                <i class="mdi mdi-close text-white me-0"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- partial:partials/_navbar.html -->
            @include('layouts.partial.dashboard-header')

            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                @include('layouts.partial.dashboard-sidebar')
                
                <!-- content-wrapper -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        {{ $slot }}
                    </div>

                    <!-- partial:partials/_footer.html -->
                    @include('layouts.partial.dashboard-footer')

                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>

        <!-- plugins:js -->
        <script src="{{asset('public/backend')}}/vendors/js/vendor.bundle.base.js"></script>
        <script src="{{asset('public/backend')}}/vendors/chart.js/Chart.min.js"></script>
        <script src="{{asset('public/backend')}}/js/jquery.cookie.js" type="text/javascript"></script>
        <script src="{{asset('public/backend')}}/js/off-canvas.js"></script>
        <script src="{{asset('public/backend')}}/js/hoverable-collapse.js"></script>
        <script src="{{asset('public/backend')}}/js/misc.js"></script>
        <script src="{{asset('public/backend')}}/js/dashboard.js"></script>
        <script src="{{asset('public/backend')}}/js/todolist.js"></script>
        
        @stack('scripts')
    </body>
</html>

