
			<!--Footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
							Copyright © 2022 <a href="javascript:void(0);" class="fs-14 text-primary">usedcaradda.com</a>. Designed with <span class="fa fa-heart text-primary"></span> by <a href="aliveinc.in" class="text-primary"> Alive Inc </a>  All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!--/Footer-->
		</div>
		<!--/Page-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>

		<!-- JQuery js-->
		<script src="frontend/assets/js/vendors/jquery.min.js"></script>

		<!-- Bootstrap js -->
		<script src="frontend/assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="frontend/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--JQueryVehiclerkline Js-->
		<script src="frontend/assets/js/vendors/jquery.sparkline.min.js"></script>

		<!-- Circle Progress Js-->
		<script src="frontend/assets/js/vendors/circle-progress.min.js"></script>

		<!-- Star Rating-2 Js-->
		<script src="frontend/assets/plugins/ratings-2/jquery.star-rating.js"></script>
		<script src="frontend/assets/plugins/ratings-2/star-rating.js"></script>


		<!-- Fullside-menu Js-->
		<script src="frontend/assets/plugins/toggle-sidebar/sidemenu.js"></script>

		<!-- Input Mask Plugin -->
		<script src="frontend/assets/plugins/input-mask/jquery.mask.min.js"></script>

		<!-- JQVMap -->
		<script src="frontend/assets/plugins/jqvmap/jquery.vmap.js"></script>
		<script src="frontend/assets//plugins/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="frontend/assets/plugins/jqvmap/jquery.vmap.sampledata.js"></script>

		<!-- ECharts Plugin -->
		<script src="frontend/assets/plugins/echarts/echarts.js"></script>

		<!-- jQuery Sparklines -->
		<script src="frontend/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!-- Flot Chart -->
		<script src="frontend/assets/plugins/flot/jquery.flot.js"></script>
		<script src="frontend/assets/plugins/flot/jquery.flot.fillbetween.js"></script>
		<script src="frontend/assets/plugins/flot/jquery.flot.pie.js"></script>

		<!--Counters -->
		<script src="frontend/assets/plugins/counters/counterup.min.js"></script>
		<script src="frontend/assets/plugins/counters/waypoints.min.js"></script>

		<!-- P-scroll js-->
		<script src="frontend/assets/plugins/p-scrollbar/p-scrollbar.js"></script>
		<script src="frontend/assets/plugins/p-scrollbar/p-scroll1.js"></script>

		<!-- CHARTJS CHART -->
		<script src="frontend/assets/plugins/chart/chart.bundle.js"></script>
		<script src="frontend/assets/plugins/chart/utils.js"></script>

		<!-- Index Scripts -->
		<script src="frontend/assets/js/index3.js"></script>

		<!-- Custom Js-->
		<script src="frontend/assets/js/admin-custom.js"></script>

		<!-- SwitcherCustom Js-->
		<script src="frontend/assets/js/switcher-custom.js"></script>

		<!--ThemeColors JS -->
		<script src="frontend/assets/js/themeColors.js"></script>
		{{-- ------bootsdrap----- --}}
		<!-- JavaScript Bundle with Popper -->
 		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
		
		{{-- --------link----- --}}
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


{{-- ------popup for form------- --}}
<script>
	function closeForm() {
		$('.form-popup-bg').removeClass('is-visible');
	  }
	  
	  $(document).ready(function($) {
		
		/* Contact Form Interactions */
		$('#btnOpenForm').on('click', function(event) {
		  event.preventDefault();
	  
		  $('.form-popup-bg').addClass('is-visible');
		});
		
		  //close popup when clicking x or off popup
		$('.form-popup-bg').on('click', function(event) {
		  if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
			event.preventDefault();
			$(this).removeClass('is-visible');
		  }
		});
		});
	</script>
{{-- --------------edit-------------- --}}
<script>
	
</script>

	</body>
</html>