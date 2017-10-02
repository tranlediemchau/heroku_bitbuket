</div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<script src="<?php __SITE_PATH ?>/admin/public/plugins//jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php __SITE_PATH ?>/admin/public/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php __SITE_PATH ?>/admin/public/plugins//iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
</body>
</html>
