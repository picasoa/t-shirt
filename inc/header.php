<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="./">Shirts 4 Mike</a></h1>

			<ul class="nav" style="position: relative; left:120px;">
				<li class="shirts <?php if ($section == "shirts") { echo "on"; } ?>"><a href="shirts.php">Shirts</a></li>
				<li class="contact <?php if ($section == "contact") { echo "on"; } ?>"><a href="contact.php">Contact</a></li>
				<li class="cart"><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=Q6NFNPFRBWR8S&amp;display=1">Shopping Cart</a></li>
				<li style="background: url(img_navsprites_hover.gif);"><a href="index.php?login=on" >LOGIN</a></li>
			</ul>

		</div>

	</div>

	<div id="content">