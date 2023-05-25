<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>


    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="{{ url('public/admin') }}/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        @include('layout.header')
        @include('layout.sidebar')


        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    
                </div>
            </div>



            <section class="content">
                @yield('content')
            </section>

        </div>

        @include('layout.footer')


        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>



    <script src="p{{ url('public/admin') }}/lugins/jquery/jquery.min.js"></script>

    <script src="p{{ url('public/admin') }}/lugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="p{{ url('public/admin') }}/lugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="p{{ url('public/admin') }}/lugins/chart.js/Chart.min.js"></script>

    <script src="p{{ url('public/admin') }}/lugins/sparklines/sparkline.js"></script>

    <script src="p{{ url('public/admin') }}/lugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="p{{ url('public/admin') }}/lugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="p{{ url('public/admin') }}/lugins/jquery-knob/jquery.knob.min.js"></script>

    <script src="p{{ url('public/admin') }}/lugins/moment/moment.min.js"></script>
    <script src="p{{ url('public/admin') }}/lugins/daterangepicker/daterangepicker.js"></script>

    <script src="p{{ url('public/admin') }}/lugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="p{{ url('public/admin') }}/lugins/summernote/summernote-bs4.min.js"></script>

    <script src="p{{ url('public/admin') }}/lugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="{{ url('public/admin') }}/dist/js/adminlte.js"></script>

    <script src="{{ url('public/admin') }}/dist/js/demo.js"></script>

    <script src="{{ url('public/admin') }}/dist/js/pages/dashboard.js"></script>
</body>

</html>
