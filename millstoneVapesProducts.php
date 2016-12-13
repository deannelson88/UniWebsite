<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Millstone Vapes - Products</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
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

          <form action="purchaseForm.php" method="post">
              Aspire K4: <input type="hidden" name="Product" value="Hello"> <input type="hidden" name="Price" value="240">
                <input type="submit" name="button_1" value="Click me"> </br>
              	<img id="vapeImage"  src="VapeIcon.jpg"/> </br>

          <form action="purchaseForm.php" method="post">
              Aspire K4: <input type="hidden" name="Product" value="K4"> <input type="hidden" name="Price" value="40">
                  <button type="submit" name="action" value="buy"></button>
                  <img id="vapeImage"  src="VapeIcon.jpg"/> </br>
          </td>

          <td>

            <form action="purchaseForm.php" method="post">
                Banter: <input type="hidden" name="Product" value="Banter"> <input type="hidden" name="Price" value="200">
                  <input type="submit"> </br>
                	<img id="vapeImage"  src="VapeIcon.jpg"/> </br>

            <form action="purchaseForm.php" method="post">
                Aspire K4: <input type="hidden" name="Product" value="K4"> <input type="hidden" name="Price" value="40">
                    <input type="submit"> </br>
                    <img id="vapeImage"  src="VapeIcon.jpg"/> </br>
            </td>

            <td>

              <form action="purchaseForm.php" method="post">
                  Aspire K4: <input type="hidden" name="Product" value="K4"> <input type="hidden" name="Price" value="40">
                    <input type="submit"> </br>
                  	<img id="vapeImage"  src="VapeIcon.jpg"/> </br>

              <form action="purchaseForm.php" method="post">
                  Aspire K4: <input type="hidden" name="Product" value="K4"> <input type="hidden" name="Price" value="40">
                      <input type="submit"> </br>
                      <img id="vapeImage"  src="VapeIcon.jpg"/> </br>
              </td>

              <td>

                <form action="purchaseForm.php" method="post">
                    Aspire K4: <input type="hidden" name="Product" value="K4"> <input type="hidden" name="Price" value="40">
                      <input type="submit"> </br>
                      <img id="vapeImage"  src="VapeIcon.jpg"/> </br>

                <form action="purchaseForm.php" method="post">
                    Aspire K4: <input type="hidden" name="Product" value="234"> <input type="hidden" name="Price" value="240">
                        <input type="submit"> </br>
                        <img id="vapeImage"  src="VapeIcon.jpg"/> </br>
                </td>


			</table></left>

	</div></center>
</body>
</html>
