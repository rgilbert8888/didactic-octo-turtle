<?php include('_includes/header.php') ?>

<!-- <!DOCTYPE html> -->

	<div class="content">
		<div class="main">
			<div class="col">
				<h2>Rollers</h2>
				<a href="rollers.html"><img src="images/Rollers/Roller_09.jpg"></a>
				<div class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. 
				Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, 
				viverra non, semper suscipit, posuere a, pede.
				</div>
			</div>			
			<div class="col">
				<h2>Idlers</h2>
				<a href="idlers.html"><img src="images/Idlers/Idler_03.jpg"></a>
				<div class="description">Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, 
				eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, 
				facilisis luctus, metus.</div>
			</div>			
			<div class="col">
				<h2>Loader Tires</h2>
				<a href="loader-tires.html"><img src="images/WheelLoaderTires/loadertire1.jpg"></a>
				<div class="description">Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, 
				euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna.</div>
			</div>			
			<div class="col">
				<h2>Track Shoes</h2>
				<a href="track-shoes.html"><img src="images/TrackShoes/Shoe_07.jpg"></a>
				<div class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. 
				Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, 
				posuere a, pede.</div>
			</div>
		</div>
		<div class="aside"></div>
	</div>
</div>
<?php include('_includes/footer.php') ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$(document).on('ready', function(){

			$(window).on('resize', function(){    var w = $(window).width();    if(w > 420 && $('nav ul').is(':hidden')) {        $('nav ul').removeAttr('style');    } });
			 $('.js-menu').on('click', function(){     
			  	$('nav ul').slideToggle();   
			  }); 
			});

	</script>
</body>
</html>