
<!-- Add the sidebar's background. This div must be placed
        immediately after the control sidebar -->
</div><!-- ./wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.0
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
</footer>
<!-- jQuery 2.1.4 -->
<script src="<?php echo __SITE_PATH ?>/admin/public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo __SITE_PATH ?>/admin/public/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo __SITE_PATH ?>/admin/public/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo __SITE_PATH ?>/admin/public/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo __SITE_PATH ?>/admin/public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo __SITE_PATH ?>/admin/public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo __SITE_PATH ?>/admin/public/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="<?php echo __SITE_PATH ?>/admin/public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo __SITE_PATH ?>/admin/public/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo __SITE_PATH ?>/admin/public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo __SITE_PATH ?>/admin/public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo __SITE_PATH ?>/admin/public/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo __SITE_PATH ?>/admin/public/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo __SITE_PATH ?>/admin/public/dist/js//pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo __SITE_PATH ?>/admin/public/dist/js/demo.js"></script>


<!-- jQuery 2.1.4   cua ben trang data co them phan search-->
<script src="<?php echo __SITE_PATH ?>/admin/public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo __SITE_PATH ?>/admin/public/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo __SITE_PATH ?>/admin/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo __SITE_PATH ?>/admin/public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo __SITE_PATH ?>/admin/public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo __SITE_PATH ?>/admin/public/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo __SITE_PATH ?>/admin/public/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo __SITE_PATH ?>/admin/public/dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>

</body>
</html>
