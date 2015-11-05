<?php include('_includes/header.php') ?>

<!-- <!DOCTYPE html> -->
<style type="text/css">


</style>

<div class="banner">
	<h1>About Us</h1>
	<p>More stuff here. explanation of the company. Aliquam erat volutpat. Nam dui mi, tincidunt quis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, 
		eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, 
		facilisis luctus, metus.</p>
</div>
<div class="content group">
	<div class="slideshow main side">


		<div class="slide-container">
    		<div style="display: inline-block;">
     			 <img src="images/slideshow/Construction.jpeg"  />
   			 </div>
    		<div>
   				<img src="images/slideshow/big_bulldozer.png" />
   			</div>
   			<div>
     			<img src="images/slideshow/big_excavator.png"  />
   			 </div>
  		 </div>
<!--	<button class="next">Next</button>
		<button class="prev">Prev</button> -->
  	</div>
  	<div class="about-us side aside">
  		<h2>Quality</h2>
  		<p>Lorem libero, risus quis facilisis vestibulum pede ipsum id, 
  		sed odio sodales pellentesque amet duis justo, blandit turpis ligula. 
  		Risus sed, sagittis ligula consectetuer curabitur dui donec,
  		id orci scelerisque arcu est ullamcorper egestas, aliquam eu.</p>
  		<h2>Commitment</h2>
  		<p>Lorem libero, risus quis facilisis vestibulum pede ipsum id, 
  		sed odio sodales pellentesque amet duis justo, blandit turpis ligula. 
  		Risus sed, sagittis ligula consectetuer curabitur dui donec,
  		id orci scelerisque arcu est ullamcorper egestas, aliquam eu.</p>
  		<h2>Recent Clients</h2>
	  		<ul>
	  			<li>John Smith</li>
	  			<li>Jane Doe</li>
	  			<li>Homer Simpson</li>
	  		</ul>
  	</div>
</div>

<div class="text-section">
	<h2>Our History</h2>
	<p>Lorem libero, risus quis facilisis vestibulum pede ipsum id, 
  		sed odio sodales pellentesque amet duis justo, blandit turpis ligula. 
  		Risus sed, sagittis ligula consectetuer curabitur dui donec,
  		id orci scelerisque arcu est ullamcorper egestas, aliquam eu.</p>
  	<h2>How We're Different</h2>
  	<p>Lorem libero, risus quis facilisis vestibulum pede ipsum id, 
  		sed odio sodales pellentesque amet duis justo, blandit turpis ligula. 
  		Risus sed, sagittis ligula consectetuer curabitur dui donec,
  		id orci scelerisque arcu est ullamcorper egestas, aliquam eu.</p>
  	<h2>Our Team</h2>
  		<ul>
	  		<li>John Smith</li>
	  		<li>Jane Doe</li>
	  		<li>Homer Simpson</li>
	  	</ul>
</div>
<?php include('_includes/footer.php') ?>


	<script type="text/javascript">
		$(document).on('ready', function(){

			// $(window).on('resize', function(){    var w = $(window).width();    if(w > 420 && $('nav ul').is(':hidden')) {        $('nav ul').removeAttr('style');    } });
			//  $('.js-menu').on('click', function(){     
			//   	$('nav ul').slideToggle();   
			//   }); 

			var currentIndex = 0,
				items = $('.slide-container div'),
				itemsAmt = items.length;

			function cycleSlides(){
				var item = $('.slide-container div').eq(currentIndex);
				items.hide(); 
				item.css('display', 'inline-block');
			}

			var autoSlide = setInterval(function(){
				currentIndex += 1; 

				if(currentIndex > itemsAmt - 1){
					currentIndex = 0;
				}
				cycleSlides();
			}, 5000);
		
		$('.next').on('click', function(){

			clearInterval(autoSlide);
			currentIndex += 1;
			console.log(currentIndex);
			  if (currentIndex > itemsAmt - 1) {
				  		currentIndex = 0;
				  	}
				cycleSlides();
		});

		$('.prev').on('click', function(){
			clearInterval(autoSlide);
			currentIndex -= 1;
			  if (currentIndex < 0) {
				  		currentIndex = itemsAmt -1;
				  	}
				cycleSlides();
		});


	});

	</script>
</body>
</html>