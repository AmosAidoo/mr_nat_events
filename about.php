<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Mr Nat Events</title>
		<?php include "includes/head_items.php"?>
	</head>
	
	<body>
		<!--Navigation and Large Image-->
		<div style="width: 100%; height: 60vh; background-image: url('assets/images/close.jpg'); background-size: cover">
			<?php include "includes/nav.php" ?>
			
			<div class="" style="margin-top: 120px;">
				<h1 class="display-2 text-white text-center">About</h1>

			</div>
		</div>
		
		<div class="mt-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<img class="img-fluid rounded" src="assets/images/b.jpg"/>
					</div>
					
					<div class="col-lg-6">
						<h1 class="text-center">About Us</h1>
						<p class="text-center lead">Lorem ipsum dolor color bacon</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container mt-5">
			<h1 class="text-center">Our Team</h1>
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<img src="assets/images/b.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4">
					<div class="card" >
						<img src="assets/images/b.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4">
					<div class="card" >
						<img src="assets/images/b.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
		<?php include "includes/footer.php" ?>
		<!--JQuery Popper and Bootstrap JavaScript-->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script>
			$("#about-nav").addClass("active");
			//$(".navbar").removeClass("bg-transparent");
			//$(".navbar").addClass("bg-dark");
		</script>
	</body>
</html>