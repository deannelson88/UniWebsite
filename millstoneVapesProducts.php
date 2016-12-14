<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Millstone Vapes - Products</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
		function showImage(imageFileName, make, model) {
			// get image element
			var theImageElement = document.getElementById("vapeImage");
			// change what image is displayed
			theImageElement.src=imageFileName;
			// update caption
			var theCaption=document.getElementById("imageCaption");
			theCaption.innerHTML = make+" "+model;
		}
	</script>
	</head>
<body>

	<!-- BANNER -->

	<div>
			<center><img src="Banner.png" alt="Millstone Vape Banner"/></center>
	</div>

	<!-- BUTTONS -->

	<div align="center">
			<img src="homeButton.png" alt="Home Button" onclick="window.location.href='index.php'"/>
			<img src="productsButton.png" alt="Products Button" onclick="window.location.href='millstoneVapesProducts.php'"/>
			<img src="contactButton.png" alt="Contact Us Button" onclick="window.location.href='millstoneVapesContact.php'"/>
			<img src="newsButton.png" alt="News Button" onclick="window.location.href='millstoneVapesNews.php'"/>
	</div >


	<center><div style="background-color:#258930;width:850px;color:white;font-family:verdana;text-align:left;">

	<left><table border="1">
				<td>
					<img id="vapeImage"  src="VapeIcon.jpg"/><br/>
					<b><span id="vapeMakeModel"></span></b>
				</td>
<td>
					<?php
				// open a file for reading
				$fp = fopen("products.txt", "r");
				if ($fp) {
					// set up the table for structured output
					echo "<table border='2' width='75%' rows='6'>";
					echo "<tr><th>Make</th><th>Power</th><th>Price</th><th>Rating</th><th>Stock</th><th>Image</th></tr>";
					// read the data line by line
					while (($buffer = fgets($fp)) != FALSE)  {
						// remove whitespace
						$buffer = trim($buffer);
						// extract the component parts of the line
						$data = explode(',', $buffer);
						// display the data
						$data[3]=trim($data[3]); // remove whitespace from price data
						echo "<tr><td>$data[1]</td><td>$data[2]</td><td>&pound;$data[3]</td><td>$data[4]</td><td>$data[5]</td><td><input type='button' value='ShowImage' onClick='showImage(\"$data[6]\",\"$data[1]\",\"$data[2]\");'/></td></tr>";
					}


					// close table
					echo "</table>";
					// close the file
					fclose($fp);
				}
			?>

		</td>
		<td>
<div></br> </div>
                <form action="purchaseForm.php" method="post">
                    <input type="hidden" name="productName" value="Movkin"> <input type="hidden" name="price" value="47.99">
                        <input type="submit" value="Purchase">
						</form>
						<div> </div>
			<form action="purchaseForm.php" method="post">
                    <input type="hidden" name="productName" value="Neon"> <input type="hidden" name="price" value="69.99">
                        <input type="submit" value="Purchase">
						</form>
<div> </div>
			<form action="purchaseForm.php" method="post">
                    <input type="hidden" name="productName" value="Tesla"> <input type="hidden" name="price" value="44.99">
                        <input type="submit" value="Purchase">
						</form>
						<div> </div>
			<form action="purchaseForm.php" method="post">
                    <input type="hidden" name="productName" value="Smok"> <input type="hidden" name="price" value="37.99">
                        <input type="submit" value="Purchase">
						</form>
		</td>




			</table></left>

	</div></center>
</body>
</html>
