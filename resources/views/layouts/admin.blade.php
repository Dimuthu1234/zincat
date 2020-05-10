<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }}</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('themes/pmt_default/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('themes/pmt_default/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('themes/pmt_default/css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('themes/pmt_default/css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('themes/pmt_default/css/colors.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('themes/pmt_default/css/extras/animate.min.css') }}" rel="stylesheet" type="text/css">
    {{--<link href="{{ asset('css/global.css') }}" rel="stylesheet" type="text/css">--}}

    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
    <!-- /global stylesheets -->

    <!-- Page specific CSS files-->
    @yield('theme_css')

<!-- /Page specific CSS files -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/forms/validation/validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/notifications/pnotify.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/buttons/spin.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/buttons/ladda.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/global/datatable_init.js') }}"></script>

    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/tables/datatables/extensions/jszip/jszip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/tables/datatables/extensions/buttons.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/pages/components_buttons.js') }}"></script>

    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/forms/tags/tagsinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/forms/tags/tokenfield.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/forms/inputs/touchspin.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/forms/inputs/maxlength.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/forms/inputs/formatter.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/pages/form_floating_labels.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/forms/selects/select2.min.js') }}"></script>


    <!-- date picker js script -->
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/ui/moment/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/pickers/anytime.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/pickers/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/pickers/pickadate/picker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/pickers/pickadate/picker.date.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/pickers/pickadate/picker.time.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/pages/picker_date.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/editors/summernote/summernote.min.js') }}"></script>
    <!-- /theme JS files -->


    @yield('theme_js')

    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/pmt_default/js/plugins/ui/ripple.min.js') }}"></script>


</head>
<body>
@yield('top_nav_bar')

@yield('content')

@yield('custom_js')

@yield('vue_js')


</body>
</html>
