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
                                - Users
                            </h4>
                        </div>
                        <div class="heading-elements">
                            <div class="heading-btn-group">
                                <a href="{{ route('user.create') }}"
                                   class="btn btn-link btn-float text-size-small has-text text-primary legitRipple"><i
                                        class="icon-plus3 text-primary"></i><span>Add New User</span></a>
                            </div>
                        </div>

                    </div>


                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li>
                                <a href="#"><i class="icon-home2 position-left"></i> Admin</a>
                            </li>
                            <li class="active">Users</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">
                    @include('shared.admin.alert')

                    <div class="panel panel-flat border-top-danger-800 border-bottom-primary-800">

                        <div class="panel-heading">
                            <h5 class="panel-title">Users</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                @component('shared.admin.components.datatable')
                                    @slot('head')
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    @endslot

                                    @slot('body')

                                    @endslot

                                @endcomponent

                            </div>
                            <!-- /basic datatable -->
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

@section('custom_js')
    <script type="text/javascript">

        $(function () {
            //normal select2 dropdown without search bar
            $('.select').select2({});

            // Basic datatable
            let table = $('.datatable-basic').DataTable(
                {
                    "processing": true,
                    "stateSave": false,
                    "serverSide": true,
                    "dom": 'r<"datatable-header"fBl>t<"datatable-footer"ip>',
                    "buttons": {
                        dom: {
                            button: {
                                className: 'btn btn-mini btn-default'
                            }
                        },
                        buttons: [
                            {
                                extend: 'print',
                                text: '<i class="icon-printer position-left"></i> Print',
                                className: 'btn btn-default',
                                exportOptions: {
                                    columns: ':visible'
                                }
                            },
                            {
                                extend: 'excelHtml5',
                                className: 'btn btn-default',
                                text: '<i class="icon-file-excel position-left"></i> Excel',
                                exportOptions: {
                                    columns: ':visible'
                                }
                            },
                            {
                                extend: 'pdfHtml5',
                                className: 'btn btn-default',
                                text: '<i class="icon-file-pdf position-left"></i> Pdf',
                                exportOptions: {
                                    columns: ':visible'
                                }
                            },
                            {
                                extend: 'colvis',
                                text: '<i class="icon-three-bars"></i> <span class="caret"></span>',
                                className: 'btn bg-blue btn-icon'
                            }
                        ]
                    },
                    orderCellsTop: true,
                    fixedHeader: true,

                    ajax: {
                        "url": "{{ route('user.datatable')}}",
                    },

                    "columns": [
                        {"name": "id", searchable: true},
                        {"name": "name", sortable: true, searchable: true},
                        {"name": "email", sortable: true, searchable: true},
                        {"name": "action", sortable: false, searchable: false, "className": "text-center"}
                    ],
                    "drawCallback": function (settings) {
                        function formSubmit(e, form) {
                            swal({
                                title: "Are you sure?",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#FF7043",
                                confirmButtonText: "Yes"
                            }, function (isConfirm) {
                                if (isConfirm) {
                                    form.submit();
                                }
                            });
                        }
                    }
                }
            );

            let name = $('#name');

            $('#filter').on('click', function (e) {
                e.preventDefault();
                table
                    .column(1).search(name.val()).draw();

            });

            $('#clear').on('click', function (e) {
                e.preventDefault();
                name.val(null).change();

                table
                    .column(1).search(name.val()).draw();
            });

            function formSubmit(e, form) {
                swal({
                    title: "Are you sure?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#FF7043",
                    confirmButtonText: "Yes"
                }, function (isConfirm) {
                    if (isConfirm) {
                        form.submit();
                    }
                });
            }


        });
    </script>
@endsection
