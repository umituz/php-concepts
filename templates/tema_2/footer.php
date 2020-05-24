	<script src="http://code.jquery.com/jquery.js"></script>

							<script src="linkler/js/pgwslider.js"></script>
							<script type="text/javascript">
								$(document).ready(function() {
									$('.pgwSlider').pgwSlider();
								});
							</script>
							<script type="text/javascript" src="linkler/js/selectnav.min.js"></script>
							<script type="text/javascript">
								selectnav('nav', {
									label: '-Navigation-',
									nested: true,
									indent: '-'
								});
							</script>	

							<!-- Include owl js plugin -->
							<script src="linkler/js/owl.carousel.min.js"></script>
							<script type="text/javascript">
								$(document).ready(function() {

									$("#owl-example").owlCarousel({

										items : 4,
										itemsCustom : false,
										itemsDesktop : [1199,4],
										itemsDesktopSmall : [980,3],
										itemsTablet: [768,2],
										itemsTabletSmall: false,
										itemsMobile : [479,1],
										singleItem : false,
										itemsScaleUp : false,
										navigation : true,
										navigationText : ["prev","next"],
										pagination : false

									});

								});
							</script>

							<!-- Responsive Tabs JS -->
							<script src="linkler/js/jquery.responsiveTabs.js" type="text/javascript"></script>

							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').responsiveTabs({
										rotate: false,
										startCollapsed: 'accordion',
										collapsible: 'accordion',
										setHash: true,
										disabled: [4,5]
									});



								});
							</script>
							<script type="text/javascript">
								$('#report_link').click(function(){
									$('#report').slideToggle('normal');
								});

								$('#report_link').click(function(){
									$('#older_versions').hide('normal');
								});

								$('#older_version').click(function(){
									$('#older_versions').slideToggle('normal');
								});

								$('#older_version').click(function(){
									$('#report').hide('normal');
								});

							</script>

							<script src="linkler/js/jquery.colorbox.js"></script>
							<script>
								$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>

	</body>
	</html>
