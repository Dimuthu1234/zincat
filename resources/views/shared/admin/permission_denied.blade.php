@extends('layouts.app')

@section('top_nav_bar')
    @include('layouts.nav_bar_top.nav_bar_top_fixed')
@endsection

@section('theme_js')

@endsection

@section('content')

    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
        @include('layouts.sidebar')


        <!-- Main content -->
            <div class="content-wrapper">




                <!-- Content area -->
                <div class="content">

                    <!-- Error title -->
                    <div class="text-center content-group">
                        <h1 class="error-title">401</h1>
                        <h5>Oops, Permission denied!</h5>
                    </div>
                    <!-- /error title -->


                    <!-- Error content -->
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                            <form action="#" class="main-search panel panel-body">
                                <div class="text-center">
                                    <a href="{{ url()->previous() }}" class="btn bg-pink-400"><i class="icon-circle-left2 position-left"></i> Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /error wrapper -->


                    @include('layouts.footer')
                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

@endsection
