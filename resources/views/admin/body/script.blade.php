 

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
 <!--app JS-->
 <script src="{{asset('backend/admin')}}/assets/js/app.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"
     integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script>
     @if(Session::has('message'))
     var type = "{{ Session::get('alert-type', 'message') }}";
     switch (type) {
         case 'info':
             toastr.info("{{ Session::get('message') }}");
             break;

         case 'success':
             toastr.success("{{ Session::get('message') }}");
             break;

         case 'warning':
             toastr.warning("{{ Session::get('message') }}");
             break;
         case 'error':

             toastr.error("{{ Session::get('message') }}");
             break;

     }
     @endif

 </script>
 </body>

 </html>
