<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="#">Ahmed El-Mahdi</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.2
    </div>
</footer>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}

{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>--}}

<!-- jQuery -->
<script src="{{asset('design/AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('design/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('design/AdminLTE/dist/js/adminlte.min.js')}}"></script>


<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- jQuery -->
<script href="{{asset('design/AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script href="{{asset('design/AdminLTE/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script href="{{asset('design/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script href="{{asset('design/AdminLTE/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script href="{{asset('design/AdminLTE/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script href="{{asset('design/AdminLTE/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script href="{{asset('design/AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script href="{{asset('design/AdminLTE/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script href="{{asset('design/AdminLTE/plugins/moment/moment.min.js')}}"></script>
<script href="{{asset('design/AdminLTE/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script href="{{asset('design/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script href="{{asset('design/AdminLTE/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script href="{{asset('design/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script href="{{asset('design/AdminLTE/dist/js/adminlte.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script href="{{asset('design/AdminLTE/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script href="{{asset('design/AdminLTE/dist/js/demo.js')}}"></script>
<script href="{{asset('design/AdminLTE/dist/js/demo.js')}}"></script>

<script src="{{asset('design/AdminLTE/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('design/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script href="{{asset('design/AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>


<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/vendor/datatables/buttons.server-side.js')}}"></script>


@stack('js')
@stack('css')

</body>
</html>
