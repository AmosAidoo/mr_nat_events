<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Mr Nat Events</title>
		<?php include "includes/head_items.php"?>
	</head>
	
	<body>
		<div style="width: 100%; height: 100vh; background-image: url('assets/images/close.jpg'); background-size: cover">
			<?php include "includes/nav.php" ?>
			
			<div class="" style="margin-top: 120px;">
				<h1 class="display-2 text-white text-center">Welcome</h1>
				
				<p class="text-center text-white" style="font-size: 1.3em">
					Lorem ipsum dolor color bacon
				</p>
				
				<div class="text-center">
					<a href="#" style="border: 2px solid red; border-radius: 3px; color: white;font-size: 1.6em; padding:7px 40px">
						More About Us
					</a>
				</div>
			</div>
		</div>
		
		<div class="container mt-4">
			<h1 class="text-center" style="font-size: 3em">Our Services</h1>
			
			<div class="row">
				<div class="col-lg-4">
					<img class="img-fluid rounded" src="assets/images/waiter.jpg"/>
					<div style="position: absolute; bottom: 0; width: 90%; height: 80px; box-sizing: border-box; padding: 5px;">
						<h5>Bartenders</h5>
						<a class="bg-success" href="#" style="border: 1px solid red; border-radius: 2px; color: white; padding:2px 5px;">Visit</a>
					</div>
				</div>
				
				<div class="col-lg-4">
					<img class="img-fluid rounded" src="assets/images/ushering.jpg"/>
				</div>
				
				<div class="col-lg-4">
					<img class="img-fluid rounded" src="assets/images/bartender.jpg"/>
				</div>
			</div>
			
			<div class="row mt-3">
				<div class="col-lg-4">
					<img class="img-fluid rounded" src="assets/images/b.jpg"/>
				</div>
				
				<div class="col-lg-4">
					<img class="img-fluid rounded" src="assets/images/b.jpg"/>
				</div>
				
				<div class="col-lg-4">
					<img class="img-fluid rounded" src="assets/images/dj.jpg"/>
				</div>
			</div>
		</div>
		
		<div class="mt-5">
		<h1 class="text-center">Why Choose Us</h1>
			<div class="row">
			
				<div class="col-lg-6 bg-success">
					s
				</div>
				
				<div class="col-lg-6">
					
					<ul>
						<?php for($i = 1; $i <= 5; $i++) {
							echo "<li> Item " . $i . "</li>"; 
						}
						?>
					</ul>
				</div>
			</div>
		</div>
		<?php include "includes/footer.php" ?>
		<!--JQuery Popper and Bootstrap JavaScript-->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script>
			$("#home-nav").addClass("active");
		</script>
	</body>
</html>