    <!-- jQuery 3 -->
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url('assets/template/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/template/'); ?>bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/template/'); ?>dist/js/adminlte.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="<?php echo base_url('assets/template/'); ?>plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo base_url('assets/template/'); ?>js/custom.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets/template/'); ?>dist/js/demo.js"></script>

    <script>
        $(function() {
            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            })
        })
    </script>

</body>

</html>