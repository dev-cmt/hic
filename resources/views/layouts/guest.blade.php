
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('public/backend')}}/images/favicon.ico">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('public/backend')}}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('public/backend')}}/vendors/css/vendor.bundle.base.css">
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('public/backend')}}/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('public/backend')}}/images/favicon.ico" />
</head>
<body>
    {{ $slot }}
    <!-- plugins:js -->
    <script src="{{asset('public/backend')}}/vendors/js/vendor.bundle.base.js"></script>
    <script src="{{asset('public/backend')}}/js/off-canvas.js"></script>
    <script src="{{asset('public/backend')}}/js/hoverable-collapse.js"></script>
    <script src="{{asset('public/backend')}}/js/misc.js"></script>
    <!-- endinject -->
</body>
</html>
