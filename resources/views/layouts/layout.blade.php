<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PT. SANGKURIANG</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('asset/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- datetables -->
    <link href="{{ asset('asset/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="{{ asset('asset/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="{{ asset('asset/plugins/ionicons/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('asset/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('asset/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('asset/plugins/iCheck/flat/blue.css') }}" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{ asset('asset/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ asset('asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="{{ asset('asset/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{ asset('asset/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{ asset('asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('asset/plugins/html5shiv/html5shiv.js') }}"></script>
    <script src="{{ asset('asset/plugins/respond.js/respond.min.js')}}" type="js"></script>
    <![endif]-->
</head>
<body class="skin-purple sidebar-mini pace-done">
<div class="wrapper">
    @include('layouts.header')
    @include('layouts.sidebar')
            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <section class="content">
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2016 <a href="#">Veri Gustaf</a>.</strong> All rights reserved.
    </footer>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset('asset/plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
<!-- jQuery UI 1.11.2 -->
<script src="{{ asset('asset/plugins/jQueryUI/1.11.2/jquery-ui.min.js') }}" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('asset/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="{{ asset('asset/plugins/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('asset/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
<!-- Sparkline -->
<script src="{{ asset('asset/plugins/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
<!-- jvectormap -->
<script src="{{ asset('asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('asset/plugins/knob/jquery.knob.js') }}" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="{{ asset('asset/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
<!--<script src="{{ asset('asset/plugins/datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>-->
<script src="{{ asset('asset/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<!-- datepicker -->

<script src="{{ asset('asset/plugins/datepicker/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('asset/plugins/datepicker/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
<!--<script src="{{ asset('asset/plugins/datepicker/locales/bootstrap-datepicker.id.js') }}" type="text/javascript"></script>-->
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
<!-- iCheck -->
<script src="{{ asset('asset/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
<!-- Slimscroll -->
<script src="{{ asset('asset/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<!-- FastClick -->
<script src="{{ asset('asset/plugins/fastclick/fastclick.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('asset/dist/js/app.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <!-- <script src="{{ asset('asset/dist/js/pages/dashboard.js') }}" type="text/javascript"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('asset/dist/js/demo.js') }}" type="text/javascript"></script>

</body>
</html>
