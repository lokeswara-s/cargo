<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/bootstrap.js') }}" defer></script> -->
    <script src="{{ asset('js/material.js')}}"></script>

    <script src="{{ asset('js/stepper.js')}}" defer></script>
    <script src="{{ asset('js/steperlogic.js')}}" defer></script>
    <script>
        (function($){
            $(document).ready(function() {
                $('select').material_select();
            }); 
            })(jQuery); // end of jQuery name space
        </script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

     <!-- <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/material.css') }}" rel="stylesheet">

    <link href="{{ asset('css/stepper.css') }}" rel="stylesheet">


    <style>
        /* Latest compiled and minified CSS included as External Resource*/

/* Optional theme */

/*@import url('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css');*/
 body {
    margin-top:30px;
}
.stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
    </style>
</head>
<body>
        @yield('content')
</body>
</html>
