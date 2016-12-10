<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Millstone Vapes - Products</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript">

	function showVapeDevice(imageFileName, makeModel)
		{
			var theImageElement = document.getElementById("vapeImage");
			theImageElement.src=imageFileName;
			var theCaption=document.getElementById("vapeMakeModel");
			theCaption.innerHTML = makeModel;
		}

		$(document).ready(function()
		{
			$(".quantity").change(function () {
              var idValue = $(this).attr('id')
              var quantity = $(this).val();
              if(quantity == 0)
              {
                  $('#purchase'+idValue).prop('disabled', true);
              }
              else
              {
                  $('#purchase'+idValue).prop('disabled', false);
              }

    });

		    showHidePurchaseButton();



		});

		function showHidePurchaseButton()
		{

		   $( "tr" ).each(function( index ) {
  			var quantityValue = $('[name="mobileQuantity"]').val();
  		    if (quantityValue == '')
  		    {
  			  $('input[name=purchaseButton]').prop('disabled', true);
  		    }
  		    else
  		    {
			  $('[input[name=purchaseButton]').prop('disabled', false);
  			}
		   });
		}

		function buyCamera(id, make, stock, price, image)
		{

			window.location = "https://dunluce.infc.ulst.ac.uk/d13ml/com363/miniProject/purchaseForm.php?id=" + id + "&make=" + make + "&stock=" + stock + "&price=" + price + "&image=" + image;

		}


	</script>
</head>
<body>

	<!-- BANNER -->

	<div>
			<center><img src="Banner.png" alt="Phone Zone Banner"/></center>
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

	<center><table border="1">
				<td>
					<img id="vapeImage"  src="PhoneIcon.jpg"/><br/>
					<b><span id="vapeMakeModel"></span></b>
				</td>
				<td>
					<table><tr><th>Make / Model</th><th>Price</th><th>Stock</th><th>Quantity</th><th>Image</th><th>Purchase</th></tr><form method='post' action='purchaseForm.php'><tr><td>Amazon Fire Phone</td>
										  <td><center>&pound399.99</center></td>
										  <td><center>25</center></td><td><select id='0' name='mobileQ' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showVapeDevice("AmazonFirePhone.jpg", "Amazon Fire Phone");'/></center></td>
									   <td><input id='purchase0' type='submit' name='purchaseButton' value='Purchase' onClick='buyCamera("0","Amazon Fire Phone","25","399.99","AmazonFirePhone.jpg");'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Amazon Fire Phone'><input type='hidden' name='mobilePrice' value='399.99';><input type='hidden' name='mobileStock' value='25'><input type='hidden' name='mobileId' value='0'><input type='hidden' name='mobileImage' value='AmazonFirePhone.jpg'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action='https://dunluce.infc.ulst.ac.uk/d13ml/com363/miniProject/purchaseForm.php'><tr><td>Apple iPhone 6 Plus</td>
										  <td><center>&pound619.00</center></td>
										  <td><center>11</center></td><td><select id='1' name='mobileQ' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showVapeDevice("AppleiPhone6Plus.jpg", "Apple iPhone 6 Plus");'/></center></td>
									   <td><input id='purchase1' type='submit' name='purchaseButton' value='Purchase' onClick='buyCamera("1","Apple iPhone 6 Plus","11","619.00","AppleiPhone6Plus.jpg");'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Apple iPhone 6 Plus'><input type='hidden' name='mobilePrice' value='619.00';><input type='hidden' name='mobileStock' value='11'><input type='hidden' name='mobileId' value='1'><input type='hidden' name='mobileImage' value='AppleiPhone6Plus.jpg'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action='https://dunluce.infc.ulst.ac.uk/d13ml/com363/miniProject/purchaseForm.php'><tr><td>Apple iPhone 6</td>
										  <td><center>&pound539.00</center></td>
										  <td><center>13</center></td><td><select id='2' name='mobileQ' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showVapeDevice("AppleiPhone6.jpg", "Apple iPhone 6");'/></center></td>
									   <td><input id='purchase2' type='submit' name='purchaseButton' value='Purchase' onClick='buyCamera("2","Apple iPhone 6","13","539.00","AppleiPhone6.jpg");'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Apple iPhone 6'><input type='hidden' name='mobilePrice' value='539.00';><input type='hidden' name='mobileStock' value='13'><input type='hidden' name='mobileId' value='2'><input type='hidden' name='mobileImage' value='AppleiPhone6.jpg'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action='https://dunluce.infc.ulst.ac.uk/d13ml/com363/miniProject/purchaseForm.php'><tr><td>Samsung Galaxy S5</td>
										  <td><center>&pound469.99</center></td>
										  <td><center>0</center></td><td><b>SOLD OUT!</b></td><td><input type='button' value='View' onClick='showVapeDevice("SamsungGalaxyS5.jpg", "Samsung Galaxy S5");'/></center></td>
									   <td><input id='purchase3' type='submit' name='purchaseButton' value='Purchase' onClick='buyCamera("3","Samsung Galaxy S5","0","469.99","SamsungGalaxyS5.jpg");'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Samsung Galaxy S5'><input type='hidden' name='mobilePrice' value='469.99';><input type='hidden' name='mobileStock' value='0'><input type='hidden' name='mobileId' value='3'><input type='hidden' name='mobileImage' value='SamsungGalaxyS5.jpg'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action='https://dunluce.infc.ulst.ac.uk/d13ml/com363/miniProject/purchaseForm.php'><tr><td>Samsung Galaxy Note 4</td>
										  <td><center>&pound599.99</center></td>
										  <td><center>15</center></td><td><select id='4' name='mobileQ' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showVapeDevice("samsungGalaxyNote4.jpg", "Samsung Galaxy Note 4");'/></center></td>
									   <td><input id='purchase4' type='submit' name='purchaseButton' value='Purchase' onClick='buyCamera("4","Samsung Galaxy Note 4","15","599.99","samsungGalaxyNote4.jpg");'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Samsung Galaxy Note 4'><input type='hidden' name='mobilePrice' value='599.99';><input type='hidden' name='mobileStock' value='15'><input type='hidden' name='mobileId' value='4'><input type='hidden' name='mobileImage' value='samsungGalaxyNote4.jpg'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action='https://dunluce.infc.ulst.ac.uk/d13ml/com363/miniProject/purchaseForm.php'><tr><td>Google Nexus 6</td>
										  <td><center>&pound479.99</center></td>
										  <td><center>5</center></td><td><select id='5' name='mobileQ' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showVapeDevice("GoogleNexus6.jpg", "Google Nexus 6");'/></center></td>
									   <td><input id='purchase5' type='submit' name='purchaseButton' value='Purchase' onClick='buyCamera("5","Google Nexus 6","5","479.99","GoogleNexus6.jpg");'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Google Nexus 6'><input type='hidden' name='mobilePrice' value='479.99';><input type='hidden' name='mobileStock' value='5'><input type='hidden' name='mobileId' value='5'><input type='hidden' name='mobileImage' value='GoogleNexus6.jpg'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action='https://dunluce.infc.ulst.ac.uk/d13ml/com363/miniProject/purchaseForm.php'><tr><td>Sony Xperia Z3</td>
										  <td><center>&pound459.99</center></td>
										  <td><center>19</center></td><td><select id='6' name='mobileQ' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showVapeDevice("SonyXperiaZ3.jpg", "Sony Xperia Z3");'/></center></td>
									   <td><input id='purchase6' type='submit' name='purchaseButton' value='Purchase' onClick='buyCamera("6","Sony Xperia Z3","19","459.99","SonyXperiaZ3.jpg");'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Sony Xperia Z3'><input type='hidden' name='mobilePrice' value='459.99';><input type='hidden' name='mobileStock' value='19'><input type='hidden' name='mobileId' value='6'><input type='hidden' name='mobileImage' value='SonyXperiaZ3.jpg'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action='https://dunluce.infc.ulst.ac.uk/d13ml/com363/miniProject/purchaseForm.php'><tr><td>Apple iPhone 5s</td>
										  <td><center>&pound459.00</center></td>
										  <td><center>17</center></td><td><select id='7' name='mobileQ' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showVapeDevice("AppleiPhone5s.jpg", "Apple iPhone 5s");'/></center></td>
									   <td><input id='purchase7' type='submit' name='purchaseButton' value='Purchase' onClick='buyCamera("7","Apple iPhone 5s","17","459.00","AppleiPhone5s.jpg");'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Apple iPhone 5s'><input type='hidden' name='mobilePrice' value='459.00';><input type='hidden' name='mobileStock' value='17'><input type='hidden' name='mobileId' value='7'><input type='hidden' name='mobileImage' value='AppleiPhone5s.jpg'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action='https://dunluce.infc.ulst.ac.uk/d13ml/com363/miniProject/purchaseForm.php'><tr><td>Samsung Galaxy Alpha</td>
										  <td><center>&pound449.99</center></td>
										  <td><center>9</center></td><td><select id='8' name='mobileQ' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showVapeDevice("SamsungGlaxyAlpha.jpg", "Samsung Galaxy Alpha");'/></center></td>
									   <td><input id='purchase8' type='submit' name='purchaseButton' value='Purchase' onClick='buyCamera("8","Samsung Galaxy Alpha","9","449.99","SamsungGlaxyAlpha.jpg");'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Samsung Galaxy Alpha'><input type='hidden' name='mobilePrice' value='449.99';><input type='hidden' name='mobileStock' value='9'><input type='hidden' name='mobileId' value='8'><input type='hidden' name='mobileImage' value='SamsungGlaxyAlpha.jpg'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action='https://dunluce.infc.ulst.ac.uk/d13ml/com363/miniProject/purchaseForm.php'><tr><td>HTC One M8</td>
										  <td><center>&pound439.99</center></td>
										  <td><center>14</center></td><td><select id='9' name='mobileQ' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showVapeDevice("HTCOneM8.jpg", "HTC One M8");'/></center></td>
									   <td><input id='purchase9' type='submit' name='purchaseButton' value='Purchase' onClick='buyCamera("9","HTC One M8","14","439.99","HTCOneM8.jpg");'/></td> </tr><input type='hidden' name='mobileMakeModel' value='HTC One M8'><input type='hidden' name='mobilePrice' value='439.99';><input type='hidden' name='mobileStock' value='14'><input type='hidden' name='mobileId' value='9'><input type='hidden' name='mobileImage' value='HTCOneM8.jpg'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action='https://dunluce.infc.ulst.ac.uk/d13ml/com363/miniProject/purchaseForm.php'><tr><td>LG G3</td>
										  <td><center>&pound419.99</center></td>
										  <td><center>16</center></td><td><select id='10' name='mobileQ' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showVapeDevice("LGG3.jpg", "LG G3");'/></center></td>
									   <td><input id='purchase10' type='submit' name='purchaseButton' value='Purchase' onClick='buyCamera("10","LG G3","16","419.99","LGG3.jpg");'/></td> </tr><input type='hidden' name='mobileMakeModel' value='LG G3'><input type='hidden' name='mobilePrice' value='419.99';><input type='hidden' name='mobileStock' value='16'><input type='hidden' name='mobileId' value='10'><input type='hidden' name='mobileImage' value='LGG3.jpg'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action='https://dunluce.infc.ulst.ac.uk/d13ml/com363/miniProject/purchaseForm.php'><tr><td>Samsung Galaxy S4</td>
										  <td><center>&pound339.99</center></td>
										  <td><center>19</center></td><td><select id='11' name='mobileQ' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showVapeDevice("SamsungGalaxyS4.jpg", "Samsung Galaxy S4");'/></center></td>
									   <td><input id='purchase11' type='submit' name='purchaseButton' value='Purchase' onClick='buyCamera("11","Samsung Galaxy S4","19","339.99","SamsungGalaxyS4.jpg");'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Samsung Galaxy S4'><input type='hidden' name='mobilePrice' value='339.99';><input type='hidden' name='mobileStock' value='19'><input type='hidden' name='mobileId' value='11'><input type='hidden' name='mobileImage' value='SamsungGalaxyS4.jpg'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action='https://dunluce.infc.ulst.ac.uk/d13ml/com363/miniProject/purchaseForm.php'><tr><td>Nokia Lumia 930</td>
										  <td><center>&pound384.99</center></td>
										  <td><center>3</center></td><td><select id='12' name='mobileQ' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option></select></td><td><input type='button' value='View' onClick='showVapeDevice("NokiaLumia930.jpg", "Nokia Lumia 930");'/></center></td>
									   <td><input id='purchase12' type='submit' name='purchaseButton' value='Purchase' onClick='buyCamera("12","Nokia Lumia 930","3","384.99","NokiaLumia930.jpg");'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Nokia Lumia 930'><input type='hidden' name='mobilePrice' value='384.99';><input type='hidden' name='mobileStock' value='3'><input type='hidden' name='mobileId' value='12'><input type='hidden' name='mobileImage' value='NokiaLumia930.jpg'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form></table>				</td>
			</table></center>

	</div></center>
</body>
</html>
