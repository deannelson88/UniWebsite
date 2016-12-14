<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Millstone Vapes - Purchase Form</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript">

	function validate()
	{
		var theForm = document.getElementById("purchaseForm");
		var isCorrect=true;
		var errorStr = "Try again.  The following fields are empty: ";

		if (theForm.firstName.value == "")
		{
			isCorrect=false;
			errorStr = errorStr + " first name, ";
		}

		if (theForm.lastName.value == "")
		{
			isCorrect=false;
			errorStr=errorStr+ " last name, ";
		}

		if (theForm.email.value == "")
		{
			isCorrect=false;
			errorStr=errorStr+ " email, ";
		}

		if (theForm.address1.value == "")
		{
			isCorrect=false;
			errorStr=errorStr+ " adress line 1, ";
		}

		if (theForm.town.value == "")
		{
			isCorrect=false;
			errorStr=errorStr+ " town, ";
		}

		if (theForm.postcode.value == "")
		{
			isCorrect=false;
			errorStr=errorStr+ " postcode, ";
		}

		if (theForm.postcode.value == "")
		{
			isCorrect=false;
			errorStr=errorStr+ " card number, ";
		}

		if (theForm.title.value=="Select")
		{
			errorStr = errorStr + "title, ";
			isCorrect=false;
		}

		if (theForm.delivery.value=="")
		{
			errorStr = errorStr + "delivery, ";
			isCorrect=false;
		}

		if (theForm.email.value.indexOf('@') == -1)
		{
			errorStr = errorStr + "\nInvalid email - no @";
			isCorrect=false;
		}

		// check no more than 3 chars (and no less than 2) following last '.' character in email
		// so .co.uk is OK, as is .com, but .x or .cccc are not

		// get length of email entered
		var len = theForm.email.value.length;

		// get position of last occurance of '.'
		var lastDotPos = theForm.email.value.lastIndexOf('.');

		// get number of chars after last '.'
		var numCharsAfterLastDot=len-lastDotPos;

		// need to decrement numCharsAfterLastDot as lastIndexOf counts from 0
		numCharsAfterLastDot--;

		// check if a . character appears less than 2 or more than 3 characters from the end of the email
		if (numCharsAfterLastDot<2)
		{
			errorStr = errorStr + "\nInvalid email - less than 2 characters following last .";
			isCorrect=false;
		}

		if (numCharsAfterLastDot>3)
		{
			errorStr = errorStr + "\nInvalid email - more than 3 characters following last .";
			isCorrect=false;
		}

		if (isCorrect)
		{
			return true;
		}
		else
		{
			// show the problem fields
			alert (errorStr);
			return false;
		}

	}


	</script>


</head>
<body>
	<?php
		// get data posted from enterPaymentDetails.php
		$productName=$_POST['productName'];
		$productPrice=$_POST['price'];
	?>
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
	<!-- BODY TEXT -->

	<center><div style="background-color:#258930;width:850px;color:white;font-family:verdana;text-align:left;">

	You are about to purchase <?php echo $productName; ?> at £ <?php echo $productPrice; ?> 	<p> Fields marked with '<span class="required">*</span>' must be completed </p>
	<form id="purchaseForm" method="post" action="purchaseConfirmation.php" onSubmit="return validate();">
	<table cols="2" width="100%">
		<tr>
			<td>Title: <span class="required">*</span> </td>
			<td><select id="title" name="title">
				<option value="Select">-select a title-</option>
				<option value="Mr">Mr</option>
				<option value="Mrs">Mrs</option>
				<option value="Miss">Miss</option>
				</select> </td>
		</tr>

		<tr>
			<td width="20%">First Name:<span class="required">*</span>  </td>
			<td> <input type="text" size="40" id="firstName" name="firstName"/> </td>
		</tr>

		<tr>
			<td width="20%">Last Name:<span class="required">*</span>  </td>
			<td> <input type="text" size="40" id="lastName" name="lastName"/> </td>
		</tr>

		<tr>
			<td>Email:<span class="required">*</span> </td>
			<td><input type="text" size="40" id="email" name="email"/> </td>
		</tr>

		<tr>
			<td>Address Line 1:<span class="required">*</span> </td>
			<td><input type="text" size="40" id="address1" name="address1"/> </td>
		</tr>

		<tr>
			<td>Address Line 2: </td>
			<td><input type="text" size="40" id="address2" name="address2"/> </td>
		</tr>

		<tr>
			<td>Town:<span class="required">*</span> </td>
			<td><input type="text" size="40" id="town" name="town"/> </td>
		</tr>

		<tr>
			<td>Postcode:<span class="required">*</span> </td>
			<td><input type="text" size="40" id="postcode" name="postcode"/> </td>
		</tr>

		<tr>
			<td>Card Number:<span class="required">*</span> </td>
			<td><input type="text" size="40" id="cardNumber" name="cardNumber"/> </td>
		</tr>

		<tr>
			<td>Delivery:<span class="required">*</span></td>
			<td>Standard 3-5 day delivery (Free)<input type="radio" value="free" name="delivery"/> <br> Next Day Delivery (£3.95) <input type="radio" value="nextDay" name="delivery"/> </td>
		</tr>

		<tr>
			<td> </td>
			<input type='hidden' name='productName' value='<?php echo $productName; ?>'>
			<input type='hidden' name='productPrice' value='<?php echo $productPrice; ?>'>
			<input type='hidden' name='productQuality' value='1'>
			<td><br><input type="submit" value="Complete Purchase" /> </td>

		</tr>



	</table>
	</form>
	</div>

	</div></center>
</body>
</html>
