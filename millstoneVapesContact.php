<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Millstone Vapes - Contact Us</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript">
	function submitComment()
	{
	alert("Comment Submitted.");
	window.location="index.php";
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
			<img src="homeButton.png" alt="Home Button" onclick="window.location.href='index.php'"/>
			<img src="productsButton.png" alt="Products Button" onclick="window.location.href='millstoneVapesProducts.php'"/>
			<img src="contactButton.png" alt="Contact Us Button" onclick="window.location.href='millstoneVapesContact.php'"/>
			<img src="newsButton.png" alt="News Button" onclick="window.location.href='millstoneVapesNews.php'"/>
	</div >

	<!-- BODY TEXT -->

	<center><div style="background-color:#258930;width:850px;color:white;font-family:verdana;text-align:left;">

		<P>Need some help? Contact us!</p>

		<p><b>Telephone Number:</b> 028 123456789</p>
		<p><b>Address:</b> Unit 10 </p>
		<p>Loughanhill Industrial Estate </p>
		<p>Coleraine </p>
		<p>BT52 2NR </p>
		<p>Northern Ireland </p>
		<p><b>Email:</b> MillstoneVapes@gmail.com</p>
		<p><b>Twitter:</b> @MillstoneVapes</p>
		<p><b>Facebook:</b> /MillstoneVapes</p>


		<p> At Millstone Vapes we take our customers thoughts on the quality of our website seriously, if you have any comments please leave them below.</p>
		<p>Comments:</p><br />

		<center>
			<textarea name="comments" id="comments"rows="10" cols="40">
		Have a comment? Leave it here.
		</textarea><br />
		<input type="button" value="Submit" onClick="submitComment();" />

		<p><u>You can find us here!!</u></p>

		<img src="facebook2.png" alt="Facebook"  width="350" height="150"/>
				<br />
		<img src="Map.png" alt="Map" />

	</center>
</body>
</html>
