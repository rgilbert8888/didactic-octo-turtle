<?php include('_includes/header.php') ?>

<!-- <!DOCTYPE html> -->


<div class="banner">
	<h1>This is the Parts Page</h1>
	<!-- <p>something here</p> -->
</div>
<div class="products">

</div>

<?php include('_includes/footer.php') ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$(document).on('ready', function(){
			$.get( "equipment.json", function( data ) {
				 for (var i=0; i < data.length; i++) {
				 	// console.log(data[i].name);
				 	$('.products').append('<div class="category"><h2>' + data[i].name + '</h2><span class="'+ data[i].name+'">Get Info</span><p class="sub"></p><img class="photo" /></div>');
				 		var name = data[i].name;
				 		var items = data[i].items;
				 		

					 		for (var x = 0; x < data[i].items.length; x++) { 
							   console.log(data[i].items[x].Description, data[i].items[x].Photo);
							}
						}

						// for(var j = 0; j < items.length; j++) {
	 				// 		$('.sub').html( items[j].Description );
	 				// 		$('.photo').attr('src', items[j].Photo );
	 				// 	}
		
				}); 
			});

	</script>
</body>
</html>

