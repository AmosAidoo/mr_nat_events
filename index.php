<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Mr Nat Events</title>
		<?php include "includes/head_items.php"?>
	</head>
	
	<body>
		<!--Navigation and Large Image-->
		<div style="width: 100%; height: 100vh; background-image: url('assets/images/close.jpg'); background-size: cover">
			<?php include "includes/nav.php" ?>
			
			<div class="" style="margin-top: 120px;">
				<h1 class="display-2 text-white text-center">Welcome</h1>
				
				<p class="text-center text-white" style="font-size: 1.3em">
					Lorem ipsum dolor color bacon
				</p>
				
				<div class="text-center">
					<a href="#" style="border: 2px solid red; border-radius: 3px; color: white;font-size: 1.6em; padding:7px 40px; text-decoration: none;">
						More About Us
					</a>
				</div>
			</div>
		</div>
		
		<!--Services Section-->
		<div class="container mt-4">
			<h1 class="text-center" style="font-size: 3em">Our Services</h1>
			
			<div class="row">
				<div class="col-lg-4">
					<img class="img-fluid" src="assets/images/waiter.jpg" style="width: 100%; height: 100%"/>
					<div style="position:absolute; top:0; border-radius:5px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.4)">
						
					</div>
					<div style="z-index:1;position: absolute; bottom: 0; width: 90%; height: 120px; box-sizing: border-box; padding: 5px 5px 5px 15px;">
						<h3 style="color:#f1f1f1">Bartenders</h3>
						<a href="#" style="border: 1px solid red; border-radius: 2px; color: white; padding:2px 5px;">Visit</a>
					</div>
				</div>
				
				<div class="col-lg-4">
					<img class="img-fluid rounded" src="assets/images/ushering.jpg" style="width: 100%; height: 100%"/>
					<div style="position:absolute; top:0; border-radius:5px; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.4)">
						
					</div>
					
					<div style="z-index:1; position: absolute; bottom: 0; width: 90%; height: 120px; box-sizing: border-box; padding: 5px 5px 5px 15px;">
						<h3 style="color:#f1f1f1">Bartenders</h3>
						<a href="#" style="border: 1px solid red; border-radius: 2px; color: white; padding:2px 5px;">Visit</a>
					</div>
				</div>
				
				<div class="col-lg-4">
					<img class="img-fluid rounded" src="assets/images/bartender.jpg" style="opacity: .7;width: 95%; height: 95%"/>
					<div style="position: absolute; bottom: 0; width: 90%; height: 120px; box-sizing: border-box; padding: 5px 5px 5px 15px;">
						<h3 style="color:#313131">Bartenders</h3>
						<a href="#" style="border: 1px solid red; border-radius: 2px; color: white; padding:2px 5px;">Visit</a>
					</div>
				</div>
			</div>
			
			<div class="row mt-3">
				<div class="col-lg-4">
					<img class="img-fluid rounded" src="assets/images/b.jpg"  style="opacity: .7;width: 95%; height: 95%"/>
					<div style="position: absolute; bottom: 0; width: 90%; height: 120px; box-sizing: border-box; padding: 5px 5px 5px 15px;">
						<h3 style="color:#313131">Bartenders</h3>
						<a href="#" style="border: 1px solid red; border-radius: 2px; color: white; padding:2px 5px;">Visit</a>
					</div>
				</div>
				
				<div class="col-lg-4">
					<img class="img-fluid rounded" src="assets/images/b.jpg" style="opacity: .7;width: 95%; height: 95%"/>
					<div style="position: absolute; bottom: 0; width: 90%; height: 120px; box-sizing: border-box; padding: 5px 5px 5px 15px;">
						<h3 style="color:#313131">Bartenders</h3>
						<a href="#" style="border: 1px solid red; border-radius: 2px; color: white; padding:2px 5px;">Visit</a>
					</div>
				</div>
				
				<div class="col-lg-4">
					<img class="img-fluid rounded" src="assets/images/dj.jpg" style="opacity: .7;width: 95%; height: 95%"/>
					<div style="position: absolute; bottom: 0; width: 90%; height: 120px; box-sizing: border-box; padding: 5px 5px 5px 15px;">
						<h3 style="color:#313131">Bartenders</h3>
						<a href="#" style="border: 1px solid red; border-radius: 2px; color: white; padding:2px 5px;">Visit</a>
					</div>
				</div>
			</div>
		</div>
		
		<!--Why Choose Us Section-->
		<div class="mt-5">
		<h1 class="text-center">Why Choose Us</h1>
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<img class="img-fluid rounded" src="assets/images/b.jpg"/>
					</div>
					
					<div class="col-lg-6">
						
						<ul class="list-group">
						  <li class="list-group-item">Cras justo odio</li>
						  <li class="list-group-item">Dapibus ac facilisis in</li>
						  <li class="list-group-item">Morbi leo risus</li>
						  <li class="list-group-item">Porta ac consectetur ac</li>
						  <li class="list-group-item">Vestibulum at eros</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--Footer-->
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