<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ !empty($meta_title)?$meta_title.' | ':'' }} {{ !empty($setting->website_name)?$setting->website_name:'' }}</title>
    @if (!empty($meta_description))
    <meta name="description" content="{{ $meta_description }}">
    @endif
    @if (!empty($meta_keywords))
    <meta name="keywords" content="{{ $meta_keywords }}">
    @endif

    <link rel="shortcut icon" href="{{ $setting->getFavicon() }}">
    <link rel="icon" href="{{ $setting->getFavicon() }}">

    <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome/font-awesome.min.css') }}">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
    <link href="{{ url('assets/backend/css/select2.min.css') }}" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style type="text/css">
        .ck-editor__editable[role="textbox"] {
            /* Editing area */
            min-height: 200px;
        }

        .ck-content .image {
            /* Block images */
            max-width: 80%;
            margin: 20px auto;
        }

        .ck-content .image {
            /* Block images */
            max-width: 80%;
            margin: 20px auto;
        }

        .custom-bg {
            background: #f4f6f9;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            padding: 6px;
            margin-bottom: 2rem;
        }

        [class*=sidebar-dark] .brand-link {
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .select2-container .select2-selection--single {
            height: 34px;
        }
        .fl-wrapper{
            z-index: 1036 !important;
        }
    </style>
    @yield('styles')
    <script>
        jsConfig = {};
        jsConfig.base = "{{ env('APP_URL') }}"
    </script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.layouts.partials.header')
        <div class="content-wrapper">
            @yield('content')
        </div>

        @include('admin.layouts.partials.footer')
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <script src="{{ url('assets/plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/dist/js/adminlte.js') }}"></script>

    <script src="{{ url('assets/filesManagement/ckeditor/ckeditor.js') }}"></script>

    <script src="{{ url('assets/plugins/chart.js/Chart.min.js') }}"></script>

    <script src="{{ url('assets/backend/js/select2.min.js') }}"></script>

    <script src="{{ url('assets/backend/js/sweetalert.min.js') }}"></script>

    <script src="{{ url('assets/dist/js/demo.js') }}"></script>
    <script src="{{ url('assets/dist/js/pages/dashboard3.js') }}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $(".list_style_1").append('<i class="fa fa-check"></i>');
            $('.select2').select2();
        })

        $(document).ready(function() {
            var txtContent = document.getElementById("ckeditor");
            if (txtContent !== null) {
                CKEDITOR.replace(txtContent);
            }

            var txtContent1 = document.getElementById("ckeditor1");
            if (txtContent1 !== null) {
                CKEDITOR.replace(txtContent1);
            }
        });
    </script>
    @yield('scripts')
</body>

</html>