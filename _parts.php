<?php include('_includes/header.php') ?>

<!-- <!DOCTYPE html> -->
<style type="text/css">

.gallery ul {
  margin: 0 auto;
  padding: 0;
  width: 80%;
  /*background-color: blue;*/
  text-align: center;
}

.gallery li {
  width: 47%;
  display: inline-block;
  list-style: none;
  padding: 1%;
  /*vertical-align: middle;*/
 /* border:1px solid;*/
  text-align: center;
}

.gallery li img {
		
  max-width: 100%;
  margin: 0 auto;
}

</style>



    <section class="gallery">
      <ul>
      <!-- 	<li class="hero"></li> -->
        <li><img src="http://www.constructionequipmentguide.com/scripts/asp_resize_edit.asp?id=11738" ></li>
        <li><img src="http://www.constructionequipmentguide.com/scripts/asp_resize_crop.asp?id=35027" ></li>
        <li><img src="https://www.deere.com/en_US/media/images/product/construction/skid_steers/332e/r4c008188_332e_642x462.png" ></li>
        <li><img src="images/TrackChains/TrackChain_08.gif" ></li>
        <li><img src="http://www.constructionequipmentguide.com/scripts/asp_resize_edit.asp?id=11738&width=800" ></li>
        <li><img src="http://r3.forconstructionpros.com/files/base/FCP/image/2013/12/16x9/640x360/bomag--35-millingmachine_11282014.jpg" ></li>

      </ul>
    </section>


<?php include('_includes/footer.php') ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$(document).on('ready', function(){
			// $.get( "equipment.json", function( data ) {// $.get( "equipment.json", function( data ) {
			//   for (var i = 0; i < data.length; i++) {
			//     // console.log(data[i].name);
			//     var name = data[i].name;
			//     var items = data[i].items;

			//     // $('.products').append('<div class="category"><h2>' + data[i].name + '</h2><span class="'+ data[i].name+'">Get Info</span><p class="sub"></p><img class="photo" /></div>');
			//     var category = $('<div/>', {
			//       class: 'category'
			//     });
			//     var name = $('<h2/>', {
			//       text: data[i].name
			//     });
			//     var getInfo = $('<span/>', {
			//       class: data[i].name,
			//       text: 'Get Info'
			//     });

			//     category.append(name);
			//     category.append(getInfo);

			//     for (var x = 0; x < items.length; x++) {
			//       //console.log(items[x]);
			//       var sub = $('<p/>', {
			//         class: 'sub',
			//         text: items[x].Description
			//       });
			//       var img = $('<img/>', {
			//         class: 'photo',
			//         src: items[x].Photo
			//       });
			//       category.append(sub);
			//       category.append(img);
			//     }

			//     $('.products').append(category);
			//   }
			// });
		});










			
			// 	 for (var i=0; i < data.length; i++) {
			// 	 	// console.log(data[i].name);
			// 	 	$('.products').append('<div class="category"><h2>' + data[i].name + '</h2><span class="'+ data[i].name+'">Get Info</span><p class="sub"></p><img class="photo" /></div>');
			// 	 		var name = data[i].name;
			// 	 		var items = data[i].items;
				 		

			// 		 		for (var x = 0; x < data[i].items.length; x++) { 
			// 				   console.log(data[i].items[x].Description, data[i].items[x].Photo);
			// 				}
			// 			}

			// 			for(var j = 0; j < items.length; j++) {
	 	// 					$('.sub').html( items[j].Description );
	 	// 					$('.photo').attr('src', items[j].Photo );
	 	// 				}
		
			// 	}); 
		
	</script>
</body>
</html>






<!-- <div class="">
	<h1>Available Parts</h1>
	<p>We specialize in Quality Undercarriage Components</p>
	
</div> 
<div class="products">   
	<div class="category">
		<h2>Pavers</h2>
		<img src="http://www.constructionequipmentguide.com/scripts/asp_resize_edit.asp?id=11738&width=800" class="photo">
	</div>	
	<div class="category">
		<h2>Undercariage Systems</h2>
		<img src="http://www.constructionequipmentguide.com/scripts/asp_resize_crop.asp?id=35027&width=350" class="photo">
	</div>
		<div class="category">
		<h2>Rollers</h2>
		<img src="images/Rollers/Roller_07.gif" class="photo">
	</div>	
	<div class="category">
		<h2>Track Chains</h2>
		<img src="images/TrackChains/TrackChain_08.gif" class="photo">
	</div>	
	<div class="category">
		<h2>Milling Machine Parts</h2>
		<img src="http://r3.forconstructionpros.com/files/base/FCP/image/2013/12/16x9/640x360/bomag--35-millingmachine_11282014.jpg" class="photo">
	</div>	
	<div class="category">
		<h2>Skid Steers</h2>
		<img src="https://www.deere.com/en_US/media/images/product/construction/skid_steers/332e/r4c008188_332e_642x462.png" class="photo">
	</div>	<div class="category">
		<h2>Rubber Tracks</h2>
		<img src="images/Rubber Tracks/Track1.gif" class="photo">
	</div>	

	<div class="category">
		<h2>Sprockets</h2>
		<img src="images/Sprockets/Sprocket_02.gif" class="photo">
	</div>	
	<div class="category">
		<h2>Grousers</h2>
		<img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQau7ItNoZeDf9gj3YWAOmjceTMJzkqg11QTcFQmofp1TAQd5do1A" class="photo">
	</div>
	<div class="category">
		<h2>Milling Machine Parts</h2>
		<img src="http://r3.forconstructionpros.com/files/base/FCP/image/2013/12/16x9/640x360/bomag--35-millingmachine_11282014.jpg" class="photo">
	</div>	
	<div class="category">
		<h2>Skid Steers</h2>
		<img src="https://www.deere.com/en_US/media/images/product/construction/skid_steers/332e/r4c008188_332e_642x462.png" class="photo">
	</div>	<div class="category">
		<h2>Rubber Tracks</h2>
		<img src="images/Rubber Tracks/Track1.gif" class="photo">
	</div>	

	<div class="category">
		<h2>Sprockets</h2>
		<img src="images/Sprockets/Sprocket_02.gif" class="photo">
	</div>	
	<div class="category">
		<h2>Grousers</h2>
		<img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQau7ItNoZeDf9gj3YWAOmjceTMJzkqg11QTcFQmofp1TAQd5do1A" class="photo">
	</div>	
	<div class="category">
		<h2>Grousers</h2>
		<img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQau7ItNoZeDf9gj3YWAOmjceTMJzkqg11QTcFQmofp1TAQd5do1A" class="photo">
	</div>

</div> -->
