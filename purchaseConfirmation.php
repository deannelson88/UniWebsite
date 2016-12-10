<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Group Website</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript">
		

	</script>
	
		
</head>
<body>

	<!-- BANNER -->

	<div>
			<center><img src="Banner.png" alt="Phone Zone Banner"/></center>
	</div>
	
	<!-- BUTTONS -->
	
	<div align="center">
			<img src="homeButton.png" alt="Home Button" onmouseover="this.src='homeRoll.png'" onmouseout="this.src='homeButton.png'" onclick="window.location.href='phoneZoneHome.php'"/>
			<img src="productsButton.png" alt="Products Button" onmouseover="this.src='productsRoll.png'" onmouseout="this.src='productsButton.png'" onclick="window.location.href='phoneZoneProducts.php'"/>
			<img src="contactButton.png" alt="Contact Us Button" onmouseover="this.src='contactRoll.png'" onmouseout="this.src='contactButton.png'" onclick="window.location.href='phoneZoneContact.php'"/>
			<img src="simsButton.png" alt="Sims Button" onmouseover="this.src='simsRoll.png'" onmouseout="this.src='simsButton.png'" onclick="window.location.href='phoneZoneNews.php'"/>
			
	</div>
	
	<!-- BODY TEXT -->
	
	<center><div style="background-color:#4f4f4f;width:850px;color:white;font-family:verdana;text-align:left;">
	
			<input type="button" value="Print" onClick="window.print()"/>
			<p>Thank you for making a purchase at Phone Zone!</p>
			<p>Order Number: <b>4588684</b>
			<p>  <? echo $surname?>, your delivery could take up to 5 working days.<br/>
					To: , 					</p>
			<p> <u>Purchase details confirmation </u><br/>
			<table>
				<tr><td><b> Make / Model </b></td><td></td></tr>
				<tr><td><b> Price </b></td><td>£0.00</td></tr>
				<tr><td><b> Quantity </b></td><td>0</td></tr>
				<tr><td><b> Total price </b></td><td>£0.00</td></tr>
			</table>
			
			Click <a href='phoneZoneHome.php'> here </a> to return to the home page.
			
				
	</div></center>
</body>
</html>
