 

 <!-- Bootstrap JS -->
 <script src="{{asset('backend/admin')}}/assets/js/bootstrap.bundle.min.js"></script>
 <!--plugins-->
 <script src="{{asset('backend/admin')}}/assets/js/jquery.min.js"></script>
 <script src="{{asset('backend/admin')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
 <script src="{{asset('backend/admin')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
 <script src="{{asset('backend/admin')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
 <script src="{{asset('backend/admin')}}/assets/plugins/chartjs/js/Chart.min.js"></script>
 <script src="{{asset('backend/admin')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
 <script src="{{asset('backend/admin')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
 <script src="{{asset('backend/admin')}}/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
 <script src="{{asset('backend/admin')}}/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
 <script src="{{asset('backend/admin')}}/assets/plugins/jquery-knob/excanvas.js"></script>
 <script src="{{asset('backend/admin')}}/assets/plugins/jquery-knob/jquery.knob.js"></script>
 <script>
     $(function () {
         $(".knob").knob();
     });

 </script>
 <script src="{{asset('backend/admin')}}/assets/js/index.js"></script>
 <script src="{{asset('backend/admin')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="{{asset('backend/admin')}}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
 <!--app JS-->
 <script src="{{asset('backend/admin')}}/assets/js/app.js"></script>

 </body>

 </html>
