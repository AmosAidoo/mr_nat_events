<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Mr Nat Events</title>
		<link rel="stylesheet" href="dist/aos.css" />
		<script src="dist/aos.js"></script>
				<!--Start of Tawk.to Script-->
			<script type="text/javascript">
			var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
			(function(){
			var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/5d580f94eb1a6b0be607ff63/default';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
			})();
			</script>
<!--End of Tawk.to Script-->
		<?php include "includes/head_items.php"?>
	</head>
	
	<body>
		<!--Navigation and Large Image-->
		<div style="width: 100%; height: 60vh; background-image: url('assets/images/cover4.jpg'); background-size: cover; position: relative">
			<?php include "includes/nav.php" ?>
			
			<div class="" style="position: absolute; bottom:0; padding-left: 10%; height: 300px" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
				<h1 class="display-2 text-white">Cocktails</h1>
				<p class="text-white">
					Mr Nat Events photography and videography gives you the best of young talented photographers & videographers for your event.
					At Mr Nat Events we belive photography and videography is an art; one that takes a true artist to bring something to life and convey 
					a message when a thousand words cannot. We'll capture your events be it Engagements,Weddings, Birthdays / Corporate events,etc with our
					reliable and professional team
				</p>
				<a class="text-white" href="#" style="padding: 10px 20px; border: 1px solid white">Hello</a>
			</div>
		</div>
		
		<div>
			<h1 class="text-center">Gallery</h1>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
				</ol>
				
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="assets/images/cocktail/tail0.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="assets/images/cocktail/tail1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="assets/images/cocktail/tail2.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="assets/images/cocktail/tail3.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="assets/images/cocktail/tail4.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="assets/images/cocktail/tail5.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		
		<hr style="border-width:2px;border-color:black"/>
		<?php include "includes/footer.php" ?>
		<!--JQuery Popper and Bootstrap JavaScript-->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script>
			$("#services-nav").addClass("active");
			//$(".navbar").removeClass("bg-transparent");
			//$(".navbar").addClass("bg-dark");
		</script>
		<!--Aos-->
		<script>
          AOS.init();
		</script>
	</body>
</html>