<?php include('_includes/header.php') ?>

<!-- <!DOCTYPE html> -->

<style type="text/css">

.photo {
overflow: auto;
  width: auto;
  height: 100%;
  min-height: 100%;
  background-size: cover;
}
 .darken {
	position: relative;
  	/*top: 30%;*/

  color: white;
  text-align: center;
 
  background-image: 
    linear-gradient(
      rgba(0, 0, 0, 0.6),
      rgba(0, 0, 0, 0.6)
    ),
    url(images/doosan-wl.png);
}



.content {
	display: inline-block;
	width: 50%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

}

form{
	height: auto;
	margin: 0 auto;
	text-align: left;
	width: 100%;
/*	min-width: 80%;*/

}
fieldset {
	padding: 15%;
	white-space:  nowrap;
	border: 2px solid #fff;
}
form div + div {
    margin-top: 1.5em;
}
legend {
	text-align: center;
	padding: 0px 10px;
	margin: 0 auto;
}

input, textarea {
	  font-family : inherit;
  	font-size   : 100%;
	     /* To give the same size to all text field */
    width: auto;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: 100%;
    color: black;
	padding: 1.5%;
    /* To harmonize the look & feel of text field border */
    border: 1px solid #999; 
}

.button {
	background-color: rgba(0,0,0,0);
	border: 2px solid white;
	padding: 10px;
	color: white;
}
textarea{
	vertical-align: top;
	resize: vertical;
}
label{
	display: block;
	margin-bottom: 5px;
}








</style>
<!-- <div class="banner">
	<h1>Contact Us</h1>
	
</div> -->

<div class="photo darken">
<div class="content group">

<form method="post" name="contact_form" action="contact-form.php">

<fieldset>
	<legend><h2>Contact Us</h2></legend>
	<div>
		<label for="name">Name</label><input type="text" name="name">
	</div>
	<div>
		<label for="email">Email Address</label><input type="text" name="email">
	</div>
	<div>
		<label for="phone">Phone Number</label><input type="text" name="phone">
	</div>
	<div>
		<label for="message">Your Message</label><textarea name="message"></textarea>
	</div>
	<div>
	<input  class="button" type="submit" value="Submit">
		
	</div>
	
</fieldset>
</form>
</div>


</div>


<?php include('_includes/footer.php') ?>
<script type="text/javascript" src="js/gen_validatorv4.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>

	<script type="text/javascript">
		$(document).on('ready', function(){

			var frmvalidator  = new Validator("contact_form");
			frmvalidator.addValidation("name","req","Please provide your name");
			frmvalidator.addValidation("email","req","Please provide your email");
			frmvalidator.addValidation("email","email","Please enter a valid email address");
			});

	</script>
</body>
</html>