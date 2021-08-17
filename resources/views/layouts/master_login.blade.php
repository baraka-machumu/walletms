<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="shortcut icon" type="image/jpg" href="{{url('/img/1.jpg')}}"/>
    <title>WMS | Login</title>
    <!-- Custom CSS -->
    <link href="{{asset('/assets/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/login.css')}}" rel="stylesheet">

    <link href="{{asset('/assets/css/float-chart.css')}}" rel="stylesheet">

    <link href="{{asset('/assets/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/custom.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    {{--<link href="../../assets/libs/flot/css/float-chart.css" rel="stylesheet">--}}
    <!-- Custom CSS -->


    <style>



        .navbar{
            background-color: #0C6896;
        }

        body{
            /*background: #1f2021;*/

        }
        .sidebar-theme {
            /*background: #1f2021;*/
        }

        #content{
            background-color: white;
        }

        .list-unstyled .menu-categories .ps{

            width: 100%;
        }

        .menu{

            /*width: 212px;*/

        }





        .navbar .theme-brand li.theme-logo img {
            width: 100px;
            height: 34px;
            border-radius: 5px;
        }
        #content {
            /* position: relative; */
            width: 100%;
            flex-grow: 8;
            margin-top: 0;
            margin-bottom: 0;
            margin-left: 0;
            transition: .600s;
        }

        .main-container {
            min-height: 100vh;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            padding: 0 0 0 0;
        }

        .card-form{
            width: 100%;
        }
        .form-layout{

            width: 24%;
            height: 450px;
            background-color: #f1f2f3;
            margin-left: 38%;
            margin-right: 38%;

            box-shadow: 3px 3px 3px 1px #c1bdbd;


        }
        .form-layout-init{

            width: 24%;
            height: 400px;
            background-color: ##213F6B;
            /*margin-left: 70%;*/
            float: right;
            /*margin-right: 38%;*/
            background-color: transparent;
            box-shadow: 3px 3px 3px 3px #c1bdbd;

        }

        .form-layout-init-left{

            width: 40%;
            height: 400px;
            background-color: ##213F6B;
            margin-left: 9%;
            float: left;
            /*margin-right: 38%;*/
            background-color: transparent;
            /*box-shadow: 3px 3px 3px 3px #c1bdbd;*/

        }

        .form-control{

            border-radius: 0;
        }

        .login-title-screen{

            opacity: 0.9;

        }
        @media only screen and (max-width: 600px) {
            .form-layout{

                width: 90%;
                height: 50vh;
                /*background-color: white;*/
                margin-left: 5%;
                margin-right: 5%;
                margin-bottom: 5vh;
            }
        }

        #content{

            background-size: cover !important;
            background-repeat: no-repeat !important;
            background-position: center center !important;
            height: 100%;

            width: 100%;
            /*padding: 0 0;*/
            position: fixed;
            overflow-y: auto;

            background-image:url({{asset(url('assets/img/login_bg.png'))}});

        }


        .form-group label, label {
            font-size: 15px;
            color: black;
            letter-spacing: 1px;
        }

        #main-wrapper{

            background-color: white;
            height: 100%;
        }

        .title-bank{

            height: 30px;
            width: 100%;
            background-color: #213F6B;

            text-align: center;
            color: white;
        }

        .title-bank >span{

            color: white;
        }

        .img-body{

            width: 100%;
        }
        .img-bank{

            width: 30%;
            margin-left: 32%;

            margin-top: 80px;
        }
    </style>


    {{--<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements--}}
    @yield('css')
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<div id="main-wrapper">
    {{--<div class="page-wrapper page-login">--}}

        @yield('content')

    {{--</div>--}}
</div>

<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('/assets/js/jquery.min.js')}}"></script>

<script src="{{asset('/assets/js/admin.js')}}"></script>

<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('/assets/js/popper.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
{{--<script src="../../assets/extra-libs/sparkline/sparkline.js"></script>--}}
<!--Wave Effects -->
<script src="{{asset('/assets/js/waves.min.js')}}"></script>

{{--<script src="../../dist/js/waves.min.js"></script>--}}
<!--Menu sidebar -->
<script src="{{asset('/assets/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('/assets/js/custom.min.js')}}"></script>
<script src="{{asset('/assets/js/formValidation.js')}}"></script>


@yield('js')
</body>
</html>
