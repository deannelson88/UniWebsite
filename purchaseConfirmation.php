<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Millstone Vapes - Purchase Confirmation</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript">


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

	<center><div style="background-color:#258930;width:1000px;color:white;font-family:verdana;text-align:left;">

			<input type="button" value="Print" onClick="window.print()"/>
			<p>Thank you for making a purchase at Millstone Vapes!</p>
			<p>Order Number: <b>4588684</b>
			<p>  <? echo $surname?>, your delivery could take up to 5 working days.<br/>
					To: , 					</p>
			<p> <u>Purchase details confirmation </u><br/>
			<table>
				<tr><td><b> Make / Model </b></td><?php echo $_POST["mobileMakeModel"]; ?><td></td></tr>
				<tr><td><b> Price </b></td><td>£0.00</td></tr>
				<tr><td><b> Quantity </b></td><td>0</td></tr>
				<tr><td><b> Total price </b></td><td>£0.00</td></tr>
			</table>

			Click <a href='index.php'> here </a> to return to the home page.


	</div></center>
</body>
</html>
