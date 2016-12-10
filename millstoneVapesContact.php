<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Millstone Vapes - Contact Us</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript">

	function submitComment(){

	alert("Comment Submitted.");
	window.location="millstoneVapesHome.php";


	}


	</script>
</head>
<body>

	<!-- BANNER -->

	<div>
			<center><img src="Banner.png" alt="Millstone Vapes Banner"/></center>
	</div>

	<!-- BUTTONS -->

	<div align="center">
			<img src="homeButton.png" alt="Home Button" onmouseover="this.src='homeRoll.png'" onmouseout="this.src='homeButton.png'" onclick="window.location.href='millstoneVapesHome.php'"/>
			<img src="productsButton.png" alt="Products Button" onmouseover="this.src='productsRoll.png'" onmouseout="this.src='productsButton.png'" onclick="window.location.href='millstoneVapesProducts.php'"/>
			<img src="contactButton.png" alt="Contact Us Button" onmouseover="this.src='contactRoll.png'" onmouseout="this.src='contactButton.png'" onclick="window.location.href='millstoneVapesContact.php'"/>
			<img src="simsButton.png" alt="Sims Button" onmouseover="this.src='simsRoll.png'" onmouseout="this.src='simsButton.png'" onclick="window.location.href='millstoneVapesNews.php'"/>

	</div >

	<!-- BODY TEXT -->

	<center><div style="background-color:#4f4f4f;width:850px;color:white;font-family:verdana;text-align:left;">

		   Need to contact us?
		<p>Telephone Number: 028 123456789</p>
		<p>Email: MillstoneVapes@gmail.com</p>
		<p>Twitter: @MillstoneVapes</p>
		<p>Facebook: /MillstoneVapes</p>


		<p> At Millstone Vapes we take our customers thoughts on the quality of our website seriously, if you have any comments please leave them below.</p>
Comments:<br />
<textarea name="comments" id="comments">
Have a comment? Leave it here.
</textarea><br />
<input type="button" value="Submit" onClick="submitComment();" />


	</div></center>
</body>
</html>
