<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Mr Nat Events</title>
		<?php include "includes/head_items.php"?>
	</head>
	
	<body>
		<!--Navigation and Large Image-->
		<div style="width: 100%; height: 60vh; background-image: url('assets/images/close.jpg'); background-size: cover; position: relative">
			<?php include "includes/nav.php" ?>
			
			<div class="" style="position: absolute; bottom:0; padding-left: 10%; height: 300px">
				<h1 class="display-2 text-white">Beverage Shop</h1>
				<p class="text-white">Lorem ipsum dolor color bacon</p>
				<a class="text-white" href="#" style="padding: 10px 20px; border: 1px solid white">Hello</a>
			</div>
		</div>
		
		<div class="container-fluid mt-5 ">
			<h1 class="text-center">ITEM</h1>
			<div class="owl-carousel owl-theme">
				<div class="item"><h4>1</h4></div>
				<div class="item"><h4>2</h4></div>
				<div class="item"><h4>3</h4></div>
				<div class="item"><h4>4</h4></div>
				<div class="item"><h4>5</h4></div>
				<div class="item"><h4>6</h4></div>
				<div class="item"><h4>7</h4></div>
				<div class="item"><h4>8</h4></div>
				<div class="item"><h4>9</h4></div>
				<div class="item"><h4>10</h4></div>
				<div class="item"><h4>11</h4></div>
				<div class="item"><h4>12</h4></div>
			</div>
			
			<div class="owl-carousel owl-theme">
				<div class="item"><h4>1</h4></div>
				<div class="item"><h4>2</h4></div>
				<div class="item"><h4>3</h4></div>
				<div class="item"><h4>4</h4></div>
				<div class="item"><h4>5</h4></div>
				<div class="item"><h4>6</h4></div>
				<div class="item"><h4>7</h4></div>
				<div class="item"><h4>8</h4></div>
				<div class="item"><h4>9</h4></div>
				<div class="item"><h4>10</h4></div>
				<div class="item"><h4>11</h4></div>
				<div class="item"><h4>12</h4></div>
			</div>
		</div>
		
		
		
		<?php include "includes/footer.php" ?>
		<!--JQuery Popper and Bootstrap JavaScript-->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="assets/owlcarousel/dist/owl.carousel.min.js"></script>
		<script>
			$("#beverage-nav").addClass("active");
			//$(".navbar").removeClass("bg-transparent");
			//$(".navbar").addClass("bg-dark");
			$('.owl-carousel').owlCarousel({
				loop:true,
				margin:10,
				nav:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:5
					}
				}
			})
		</script>
	</body>
</html>