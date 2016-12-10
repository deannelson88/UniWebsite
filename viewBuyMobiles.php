<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		function showMobilePhone(imageFileName, makeModel) 
		{
			var theImageElement = document.getElementById("mobilePhoneImage");
			theImageElement.src=imageFileName;
			var theCaption=document.getElementById("imageMakeModel");
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
		
		function buyCamera(id, make, model, price, image)
		{	
			alert("You bought camera id="+id);
			var nextPageURL = "//dunluce.infc.ulst.ac.uk/cw13lg/com363/Recipe8/enterPaymentDetails.php?id="+id; //" "+make+" "+model+" "+price+" "+image;
			document.location=nextPageURL;
		}
		
	
		
	</script>
</head>
<body>
	<div id="mainContent">		
		<div id="mainContainer">
			<table border="1">
				<td>
					<img id="mobilePhoneImage"  src="PhoneIcon.jpg"/><br/>
					<b><span id="imageMakeModel"></span></b>
				</td>
				<td>
					<table><tr><th>Make / Model</th><th>Price</th><th>Stock</th><th>Quantity</th><th>Image</th><th>Purchase</th></tr><form method='post' action=''><tr><td>Amazon Fire Phone</td>
										  <td><center>&pound399.99</center></td>
										  <td><center>25</center></td><td><select id='0' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showMobilePhone("AmazonFirePhone.jpg", "Amazon Fire Phone");'/></center></td>
									   <td><input id='purchase0' type='submit' name='purchaseButton' value='Purchase'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Amazon Fire Phone'><input type='hidden' name='mobilePrice' value='399.99';><input type='hidden' name='mobileStock' value='25'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action=''><tr><td>Apple iPhone 6 Plus</td>
										  <td><center>&pound619.00</center></td>
										  <td><center>11</center></td><td><select id='1' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showMobilePhone("AppleiPhone6Plus.jpg", "Apple iPhone 6 Plus");'/></center></td>
									   <td><input id='purchase1' type='submit' name='purchaseButton' value='Purchase'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Apple iPhone 6 Plus'><input type='hidden' name='mobilePrice' value='619.00';><input type='hidden' name='mobileStock' value='11'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action=''><tr><td>Apple iPhone 6</td>
										  <td><center>&pound539.00</center></td>
										  <td><center>13</center></td><td><select id='2' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showMobilePhone("AppleiPhone6.jpg", "Apple iPhone 6");'/></center></td>
									   <td><input id='purchase2' type='submit' name='purchaseButton' value='Purchase'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Apple iPhone 6'><input type='hidden' name='mobilePrice' value='539.00';><input type='hidden' name='mobileStock' value='13'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action=''><tr><td>Samsung Galaxy S5</td>
										  <td><center>&pound469.99</center></td>
										  <td><center>0</center></td><td><b>SOLD OUT!</b></td><td><input type='button' value='View' onClick='showMobilePhone("SamsungGalaxyS5.jpg", "Samsung Galaxy S5");'/></center></td>
									   <td><input id='purchase3' type='submit' name='purchaseButton' value='Purchase'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Samsung Galaxy S5'><input type='hidden' name='mobilePrice' value='469.99';><input type='hidden' name='mobileStock' value='0'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action=''><tr><td>Samsung Galaxy Note 4</td>
										  <td><center>&pound599.99</center></td>
										  <td><center>15</center></td><td><select id='4' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showMobilePhone("samsungGalaxyNote4.jpg", "Samsung Galaxy Note 4");'/></center></td>
									   <td><input id='purchase4' type='submit' name='purchaseButton' value='Purchase'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Samsung Galaxy Note 4'><input type='hidden' name='mobilePrice' value='599.99';><input type='hidden' name='mobileStock' value='15'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action=''><tr><td>Google Nexus 6</td>
										  <td><center>&pound479.99</center></td>
										  <td><center>5</center></td><td><select id='5' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showMobilePhone("GoogleNexus6.jpg", "Google Nexus 6");'/></center></td>
									   <td><input id='purchase5' type='submit' name='purchaseButton' value='Purchase'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Google Nexus 6'><input type='hidden' name='mobilePrice' value='479.99';><input type='hidden' name='mobileStock' value='5'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action=''><tr><td>Sony Xperia Z3</td>
										  <td><center>&pound459.99</center></td>
										  <td><center>19</center></td><td><select id='6' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showMobilePhone("SonyXperiaZ3.jpg", "Sony Xperia Z3");'/></center></td>
									   <td><input id='purchase6' type='submit' name='purchaseButton' value='Purchase'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Sony Xperia Z3'><input type='hidden' name='mobilePrice' value='459.99';><input type='hidden' name='mobileStock' value='19'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action=''><tr><td>Apple iPhone 5s</td>
										  <td><center>&pound459.00</center></td>
										  <td><center>17</center></td><td><select id='7' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showMobilePhone("AppleiPhone5s.jpg", "Apple iPhone 5s");'/></center></td>
									   <td><input id='purchase7' type='submit' name='purchaseButton' value='Purchase'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Apple iPhone 5s'><input type='hidden' name='mobilePrice' value='459.00';><input type='hidden' name='mobileStock' value='17'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action=''><tr><td>Samsung Galaxy Alpha</td>
										  <td><center>&pound449.99</center></td>
										  <td><center>9</center></td><td><select id='8' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showMobilePhone("SamsungGlaxyAlpha.jpg", "Samsung Galaxy Alpha");'/></center></td>
									   <td><input id='purchase8' type='submit' name='purchaseButton' value='Purchase'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Samsung Galaxy Alpha'><input type='hidden' name='mobilePrice' value='449.99';><input type='hidden' name='mobileStock' value='9'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action=''><tr><td>HTC One M8</td>
										  <td><center>&pound439.99</center></td>
										  <td><center>14</center></td><td><select id='9' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showMobilePhone("HTCOneM8.jpg", "HTC One M8");'/></center></td>
									   <td><input id='purchase9' type='submit' name='purchaseButton' value='Purchase'/></td> </tr><input type='hidden' name='mobileMakeModel' value='HTC One M8'><input type='hidden' name='mobilePrice' value='439.99';><input type='hidden' name='mobileStock' value='14'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action=''><tr><td>LG G3</td>
										  <td><center>&pound419.99</center></td>
										  <td><center>16</center></td><td><select id='10' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showMobilePhone("LGG3.jpg", "LG G3");'/></center></td>
									   <td><input id='purchase10' type='submit' name='purchaseButton' value='Purchase'/></td> </tr><input type='hidden' name='mobileMakeModel' value='LG G3'><input type='hidden' name='mobilePrice' value='419.99';><input type='hidden' name='mobileStock' value='16'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action=''><tr><td>Samsung Galaxy S4</td>
										  <td><center>&pound339.99</center></td>
										  <td><center>19</center></td><td><select id='11' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select></td><td><input type='button' value='View' onClick='showMobilePhone("SamsungGalaxyS4.jpg", "Samsung Galaxy S4");'/></center></td>
									   <td><input id='purchase11' type='submit' name='purchaseButton' value='Purchase'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Samsung Galaxy S4'><input type='hidden' name='mobilePrice' value='339.99';><input type='hidden' name='mobileStock' value='19'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form><form method='post' action=''><tr><td>Nokia Lumia 930</td>
										  <td><center>&pound384.99</center></td>
										  <td><center>3</center></td><td><select id='12' class='quantity'><option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option></select></td><td><input type='button' value='View' onClick='showMobilePhone("NokiaLumia930.jpg", "Nokia Lumia 930");'/></center></td>
									   <td><input id='purchase12' type='submit' name='purchaseButton' value='Purchase'/></td> </tr><input type='hidden' name='mobileMakeModel' value='Nokia Lumia 930'><input type='hidden' name='mobilePrice' value='384.99';><input type='hidden' name='mobileStock' value='3'><input class='mobileQuantity' type='hidden' name='mobileQuantity' value='';></form></table>				</td>
			</table>
		</div>
	</div>
</div>				
</body>
</html>
