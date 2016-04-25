	
	<!-- jQuery -->
	<script src="<?php echo base_url('plugins/sb-admin/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
	
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url('plugins/sb-admin/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
	
	<!-- Metis Menu Plugin JavaScript -->
	<script src="<?php echo base_url('plugins/sb-admin/bower_components/metisMenu/dist/metisMenu.min.js'); ?>"></script>

	<!-- DataTables JavaScript -->
	<script src="<?php echo base_url('plugins/sb-admin/bower_components/datatables/media/js/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo base_url('plugins/sb-admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js'); ?>"></script>

	<!-- Custom Theme JavaScript -->
	<script src="<?php echo base_url('plugins/sb-admin/dist/js/sb-admin-2.js'); ?>"></script>

	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
	<script>
	$(document).ready(function() {
		$('<?php echo '#'.$data_table; ?>').DataTable({
				responsive: true,
				"language": {
            "lengthMenu": "Tampilkan _MENU_ data per halaman",
            "zeroRecords": "Data tidak tersedia",
            "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
            "infoEmpty": "Data tidak ditemukan",
            "infoFiltered": "(Dicari dari _MAX_ total data)",
            "paginate": {
        			"first":      "Pertama",
        			"last":       "Terakhir",
        			"next":       "Selanjutnya",
        			"previous":   "Sebelumnya"
    				},
    				"search":         "Cari:"
        }
		});
	});
	</script>

	<!-- Flot Charts JavaScript -->
		<script src="<?php echo base_url('plugins/sb-admin/bower_components/flot/excanvas.min.js'); ?>"></script>
		<script src="<?php echo base_url('plugins/sb-admin/bower_components/flot/jquery.flot.js'); ?>"></script>
		<script src="<?php echo base_url('plugins/sb-admin/bower_components/flot/jquery.flot.pie.js'); ?>"></script>
		<script src="<?php echo base_url('plugins/sb-admin/bower_components/flot/jquery.flot.resize.js'); ?>"></script>
		<script src="<?php echo base_url('plugins/sb-admin/bower_components/flot/jquery.flot.time.js'); ?>"></script>
		<script src="<?php echo base_url('plugins/sb-admin/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js'); ?>"></script>
		<script src="<?php echo base_url('plugins/sb-admin/js/flot-data.js'); ?>"></script>
</body>
</html>