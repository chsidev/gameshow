  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="https://gameshowtime.com">Game Show Time</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url("assets/plugins/jquery/jquery.min.js");?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url("assets/plugins/jquery-ui/jquery-ui.min.js");?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url("assets/plugins/bootstrap/js/bootstrap.bundle.min.js");?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url("assets/plugins/chart.js/Chart.min.js");?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url("assets/plugins/sparklines/sparkline.js");?>"></script>
<!-- JQVMap -->
<script src="<?php echo base_url("assets/plugins/jqvmap/jquery.vmap.min.js");?>"></script>
<script src="<?php echo base_url("assets/plugins/jqvmap/maps/jquery.vmap.usa.js");?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url("assets/plugins/jquery-knob/jquery.knob.min.js");?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url("assets/plugins/moment/moment.min.js");?>"></script>
<script src="<?php echo base_url("assets/plugins/daterangepicker/daterangepicker.js");?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url("assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js");?>"></script>
<!-- Summernote -->
<script src="<?php echo base_url("assets/plugins/summernote/summernote-bs4.min.js");?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url("assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js");?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("assets/dist/js/adminlte.js");?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url("assets/dist/js/demo.js");?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url("assets/dist/js/pages/dashboard.js");?>"></script>

<script src="<?php echo base_url("assets/plugins/datatables/jquery.dataTables.min.js");?>"></script>
<script src="<?php echo base_url("assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js");?>"></script>
<script src="<?php echo base_url("assets/plugins/datatables-responsive/js/dataTables.responsive.min.js");?>"></script>
<script src="<?php echo base_url("assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js");?>"></script>
<script src="<?php echo base_url("assets/plugins/datatables-buttons/js/dataTables.buttons.min.js");?>"></script>
<script src="<?php echo base_url("assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js");?>"></script>
<script src="<?php echo base_url("assets/plugins/datatables-buttons/js/buttons.html5.min.js");?>"></script>
<script src="<?php echo base_url("assets/plugins/datatables-buttons/js/buttons.print.min.js");?>"></script>
<script src="<?php echo base_url("assets/plugins/datatables-buttons/js/buttons.colVis.min.js");?>"></script>
<script src="<?php echo base_url("assets/js/admin-dashboard.js");?>"></script>

<script>
  $(function () {
    $('#games_table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html># Change 2 on 2023-05-17
