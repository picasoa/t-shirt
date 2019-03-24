<?php 
$pageTitle = "Unique T-shirts designed by a frog";
$section = "home";
include('inc/header.php');
?>
<script type="text/javascript">
		function addShirt(){
			var list = document.getElementById('latest_pro').innerHTML; 
			var list = list + '<li>><a><img src=""><p></p></a></li>';
			document.getElementById('latest_pro').innerHTML = list;

	}
	</script>
		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="shirts.php">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>
				<?php
				if (isset($_GET["login"])){

					include("inc/login_form.php");
				} else { include("inc/products.php"); ?>
				<ul class="products" id="latest_pro">
					<?php 
						$total_products = count($products);
						$position = 0;
						$list_view_html = "";
						foreach($products as $product_id => $product) { 
							$position = $position + 1;
							if ($total_products - $position < 4) {
								$list_view_html = get_list_view_html($product_id,$product) . $list_view_html;
							}
						}
						echo $list_view_html;}
						
					?>				

				</ul>
				<?php if(isset($_POST["Username"]))
						{
							include("inc/add_form.php");
						}?>
						<script type="text/javascript" src="js/DOMm.js"></script>

			</div>

		</div>


<?php include('inc/footer.php') ?>