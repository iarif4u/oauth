<?php
/**
 * Created by Md. Arifur Rahman.
 * Date: 10/30/2018
 * Time: 3:59 PM
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('sb-admin/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('sb-admin/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">


    <!-- Morris Charts CSS -->
    <link href="{{asset('sb-admin/vendor/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom CSS -->
    <link href="{{asset('sb-admin/css/sb-admin-2.css')}}" rel="stylesheet">
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('admin.home')}}">Web Application</a>
        </div>
        <!-- /.navbar-header -->
        {{--added top side bar--}}
        @include('admin.layout.include.tob_bar')

        {{--added left side bar--}}
        @include('admin.layout.include.left_bar')
    </nav>

    <div id="page-wrapper">
        @yield('content')

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('sb-admin/vendor/jquery/jquery.min.js')}}"></script>

<script src="{{asset('sb-admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('sb-admin/vendor/metisMenu/metisMenu.min.js')}}"></script>
<script src="{{asset('sb-admin/vendor/raphael/raphael.min.js')}}"></script>
<script src="{{asset('sb-admin/vendor/morrisjs/morris.min.js')}}"></script>
<script src="{{asset('sb-admin/vendor/morrisjs/morris-data.js')}}"></script>
<script src="{{asset('sb-admin/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
