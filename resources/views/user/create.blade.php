@extends('layouts.admin')

@section('top_nav_bar')
    @include('shared.admin.nav_bar_top.nav_bar_top_fixed')
@endsection

@section('theme_js')
    <script type="text/javascript"
            src="{{ asset('themes/pmt_default/js/plugins/notifications/sweet_alert.min.js') }}"></script>
@endsection

@section('content')

    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
        @include('shared.admin.sidebar')

        <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header page-header-default">

                    <div class="page-header-content">
                        <div class="page-title">
                            <h4>
                                <i class="icon-arrow-left52 position-left"></i>
                                <span class="text-semibold">Admin</span>
                                - Add New User
                            </h4>
                        </div>

                    </div>


                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li>
                                <a href="#"><i class="icon-home2 position-left"></i> Admin</a>
                            </li>

                            <li>
                                <a href="{{ route('home') }}"> User</a>
                            </li>
                            <li class="active">Create</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">
                    @include('shared.admin.alert')

                    <div class="panel panel-flat border-top-danger-800 border-bottom-primary-800">

                        <div class="panel-heading">
                            <h5 class="panel-title">Add a New User</h5>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('user.store') }}" class="form-validate" method="post"
                                  novalidate="novalidate">
                                {{ method_field('POST') }}
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group has-feedback">
                                            <label class="control-label">Name
                                                <small class="text-danger">*</small>
                                            </label>
                                            <input type="text" name="name" class="form-control"
                                                   placeholder="Enter name" value="{{ old('name') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-feedback">
                                            <label class="control-label">Email
                                                <small class="text-danger">*</small>
                                            </label>
                                            <input type="text" name="email" class="form-control"
                                                   placeholder="Enter email" value="{{ old('email') }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group has-feedback">
                                            <label class="control-label">Password
                                                <small class="text-danger">*</small>
                                            </label>
                                            <input type="password" name="password" class="form-control"
                                                   placeholder="Enter password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-feedback">
                                            <label class="control-label">Confirm Password
                                                <small class="text-danger">*</small>
                                            </label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                   placeholder="Enter confirm password" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="text-right">
                                    <button type="submit"
                                            class="btn btn-success btn-ladda btn-ladda-spinner ladda-button legitRipple"
                                            id="submit-button" data-spinner-color="#fff" data-style="zoom-out">
                                        <span class="ladda-label">Create New User</span>
                                        <span class="ladda-spinner"></span></button>
                                    <button type="reset" class="btn legitRipple" id="reset">
                                        <span class="ladda-label">Clear</span>
                                    </button>
                                </div>
                            </form>
                        </div>


                    </div>

                    <!-- /2 columns form -->


                    @include('shared.admin.footer')
                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

@endsection
