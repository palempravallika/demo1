<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Caf&eacute;!</title>
	<link rel="stylesheet" href="css/styles.css">
</head>

<body class="bodyStyle">

	<div id="header" class="mainHeader">
		<hr>
		<div class="center">Caf&eacute;</div>
	</div>
	<br>
	<?php
		// Get the application environment parameters from the Parameter Store.
		include ('getAppParameters.php');

		// Display the server metadata information if the showServerInfo parameter is true.
		include('serverInfo.php');
	?>
	<hr>
	<div class="topnav">
		<a href="index.php">Home</a>
		<a href="#aboutUs">About Us</a>
		<a href="#contactUs">Contact Us</a>
		<a href="menu.php">Menu</a>
		<a href="orderHistory.php">Order History</a>
	</div>
	<hr>
	<div id="mainContent">

		<div id="mainPictures" class="center">
			<table>
				<tr>
					<td><img src="images/Coffee-and-Pastries.jpg" height=auto width="490"></td>
					<td><img src="data:image/jpeg;base64,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" height=auto width="450"></td>
				</tr>
			</table>
			<hr>
			<p>Our caf&eacute; offers an assortment of delicious and delectable pastries and coffees that will put a smile on your face. From cookies to croissants, tarts and cakes, each treat is especially prepared to excite your tastebuds and brighten your day!</p>
			<br>
			<table>
				<tr>
					<td bgcolor="aquamarine">
						<div class="cursiveText">Frank bakes a rich variety of cookies. Try them all!</div>
						<table>
							<tr>
								<td><img src="images/Cookies.jpg" height=auto width="300"></td>
							</tr>
						</table>
					</td>
					<td bgcolor="orange">
						<table>
							<tr>
								<td><img src="images/Cup-of-Hot-Chocolate.jpg" height=auto width="200"></td>
								<td class="cursiveText">Tea,<br>Coffee,<br>Lattes,<br> and Hot Chocolate.<br>Yes, we have it!</td>
							</tr>
						</table>
					</td>
					<td bgcolor="aquamarine">
						<div class="cursiveText">Our tarts are always <br/> a customer favorite!<br><br>
					  </div>
						<table>
							<tr>
								<td><img src="images/Strawberry-Tarts.jpg" height=auto width="170"></td>
								<td><img src="images/Strawberry-Blueberry-Tarts.jpg" height=auto width="170"></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<hr>
		</div>
	</div>

	<div id="aboutUs" class="center">
		<hr>
		<div>
			<h2>About Us</h2>
		</div>
			<table>
				<tr>
					<td><img src="images/Frank-Martha.jpg" height=auto width="400"></td>
					<td><p>Frank and Martha have been adding sweetness to their customers' lives since 2020.  Frank's recipes have been passed down from his mother and use simple and fresh ingredients to produce delightful flavors.  Both of them will personally greet you with a welcoming smile when you visit!</p></td>
				</tr>
			</table>
			<hr>
		</div>

	<div id="contactUs" align="center">
		<hr>
		<div>
			<h2>Contact Us</h2>
		</div>
		<table>
			<tr>
				<td><img src="images/Coffee-Shop.jpg" height=auto width="120"></td>
			</tr>
		</table>
		<div><p>123 Any Street<br>Any Town, USA<br><br>Tel: +1-800-555-0193</p></div>
		<div>
			<h3>Hours</h3>
		</div>
		<div>Weekdays: 6:00am - 6:00pm<br>Saturday: 7:00am - 7:00pm<br>Closed on Sundays</div>
	</div>

	<div id="Copyright" class="center">
		<h5>&copy; 2020, Amazon Web Services, Inc. or its Affiliates. All rights reserved.</h5>
	</div>
</body>
</html>
