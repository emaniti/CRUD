 <!-- jQuery -->
 <script src="{{ asset('backend/js/jquery.min.js') }}"></script>


 <!-- Nice Scroll -->
 <script src="{{ asset('backend/js/plugins/nicescroll/jquery.nicescroll.min.js') }}"></script>
 <!-- jQuery UI -->
 <script src="{{ asset('backend/js/plugins/jquery-ui/jquery-ui.js') }}"></script>
 <!-- Touch enable for jquery UI -->
 <script src="{{ asset('backend/js/plugins/touch-punch/jquery.touch-punch.min.js') }}"></script>
 <!-- slimScroll -->
 <script src="{{ asset('backend/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
 <!-- Bootstrap -->
 <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
 <!-- vmap -->
 <script src="{{ asset('backend/js/plugins/vmap/jquery.vmap.min.js') }}"></script>
 <script src="{{ asset('backend/js/plugins/vmap/jquery.vmap.world.js') }}"></script>
 <script src="{{ asset('backend/js/plugins/vmap/jquery.vmap.sampledata.js') }}"></script>
 <!-- Bootbox -->
 <script src="{{ asset('backend/js/plugins/bootbox/jquery.bootbox.js') }}"></script>
 <!-- Flot -->
 <script src="{{ asset('backend/js/plugins/flot/jquery.flot.min.js') }}"></script>
 <script src="{{ asset('backend/js/plugins/flot/jquery.flot.bar.order.min.js') }}"></script>
 <script src="{{ asset('backend/js/plugins/flot/jquery.flot.pie.min.js') }}"></script>
 <script src="{{ asset('backend/js/plugins/flot/jquery.flot.resize.min.js') }}"></script>
 <!-- imagesLoaded -->
 <script src="{{ asset('backend/js/plugins/imagesLoaded/jquery.imagesloaded.min.js') }}"></script>
 <!-- PageGuide -->
 <script src="{{ asset('backend/js/plugins/pageguide/jquery.pageguide.js') }}"></script>
 <!-- FullCalendar -->
 <script src="{{ asset('backend/js/plugins/fullcalendar/moment.min.js') }}"></script>
 <script src="{{ asset('backend/js/plugins/fullcalendar/fullcalendar.min.js') }}"></script>
 <!-- Chosen -->
 <script src="{{ asset('backend/js/plugins/chosen/chosen.jquery.min.js') }}"></script>
 <!-- select2 -->
 <script src="{{ asset('backend/js/plugins/select2/select2.min.js') }}"></script>
 <!-- icheck -->
 <script src="{{ asset('backend/js/plugins/icheck/jquery.icheck.min.js') }}"></script>

 <!-- Theme framework -->
 <script src="{{ asset('backend/js/eakroko.min.js') }}"></script>
 <!-- Theme scripts -->
 <script src="{{ asset('backend/js/application.min.js') }}"></script>
 <!-- Just for demonstration -->
 <script src="{{ asset('backend/js/demonstration.min.js') }}"></script>
 <script type="text/javascript">
 var _gaq = _gaq || [];
 _gaq.push(['_setAccount', 'UA-38620714-4']);
 _gaq.push(['_trackPageview']);

 (function() {
     var ga = document.createElement('script');
     ga.type = 'text/javascript';
     ga.async = true;
     ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
     var s = document.getElementsByTagName('script')[0];
     s.parentNode.insertBefore(ga, s);
 })();
 </script>
 @yield('custome_scripts_links')
 @yield('custome_scripts')