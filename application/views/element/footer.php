<?php if ($this->is_login) { ?>
	<?php $this->load->view('element/main_footer'); ?>
	<?php $this->load->view('element/control_bar'); ?>
<?php } ?>
</body>
<footer>
	<!-- ./wrapper -->

	<!-- jQuery 2.2.0 -->
	<script src="<?php echo base_url(); ?>/plugins/jQuery/jQuery-2.2.0.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo base_url(); ?>/js/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 3.3.6 -->
	<script src="<?php echo base_url(); ?>/bootstrap/js/bootstrap.min.js"></script>
	<!-- Morris.js charts -->
	<script src="<?php echo base_url(); ?>/plugins/raphael/raphael-min.js"></script>
	<!-- script src="<?php echo base_url(); ?>/plugins/morris/morris.min.js"></script -->
	<!-- Sparkline -->
	<script src="<?php echo base_url(); ?>/plugins/sparkline/jquery.sparkline.min.js"></script>
	<!-- jvectormap -->
	<script src="<?php echo base_url(); ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url(); ?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?php echo base_url(); ?>/plugins/knob/jquery.knob.js"></script>
	<!-- daterangepicker -->
	<script src="<?php echo base_url(); ?>/plugins/moment/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- datepicker -->
	<script src="<?php echo base_url(); ?>/plugins/datepicker/bootstrap-datepicker.js"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="<?php echo base_url(); ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<!-- Slimscroll -->
	<script src="<?php echo base_url(); ?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="<?php echo base_url(); ?>/plugins/fastclick/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url(); ?>/dist/js/app.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<!-- script src="<?php echo base_url(); ?>/dist/js/pages/dashboard.js"></script -->
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url(); ?>/dist/js/demo.js"></script>
	<!-- iCheck -->
	<script src="<?php echo base_url(); ?>/plugins/iCheck/icheck.min.js"></script>
	<script src="<?php echo base_url(); ?>/js/fa-loading.js"></script>
	<script src="<?php echo base_url(); ?>/js/jquery.printPage.js"></script>
	<script src="<?php echo base_url(); ?>/plugins/jquery-price-format/jquery.price_format.2.0.min.js"></script>
	<!-- main JS -->
	<script src="<?php echo base_url(); ?>/js/main.js"></script>
	<script>
		$(function() {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' // optional
			});
		});
	</script>
</footer>

</html>