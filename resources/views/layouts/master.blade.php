<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    @include('includes.head')

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <i class="fa fa-fw   fa-user"></i>
                    Pekerja
                    {{--@if (Auth::user()->user_group == 'admin')--}}
                        {{--Pentadbir--}}
                    {{--@elseif (Auth::user()->user_group == null)--}}
                        {{--Belum Login--}}
                    {{--@else--}}
                        {{--Pekerja--}}
                    {{--@endif--}}
                </a>
            </div>
            <!-- Top Menu Items -->
            @include('includes.topmenu')
            @include('includes.menu')
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            @yield('title_dashbord')
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
                @yield('content')
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

@include('includes.script')
    @yield('script')

</body>

</html>
