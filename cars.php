<?php include('includes/header.php'); ?>
<?php include('data/carData.php'); ?>


<!-- header -->
<div id="header">
	<!-- title -->
	<div class="row">
		<div class="col-md-3 pull-left"><img src="img/banner-left.png"></div>
		<div class="col-md-6"><h1>Boyd's Used Motors</h1></div>
		<div class="col-md-3 pull-right"><img src="img/banner-right.png"></div>
	</div>
	
	<!-- motd -->
	<h2 id="motd">A name you can surely trust!</h2>
	
	<!-- navigation -->
	<?php include('includes/navigation.php'); ?>
	
</div><!-- /header -->


<!-- main content -->
<div id="content" class="row">
	
	<h2>Amazing Cars Available!</h2>
	
	<p>View our wide range of fabulous cars and low low prices, and quality. Ensure your car is only sold by a Boyd approved dealership.</p>
	
	
	
	<!-- DO NOT USE THIS UNTIL PART 2 -->
	<!-- when told to, remove these comments -->
	<!--
	<div class="row">
		<p class="col-md-2">Car Colour</p>
		<form action="cars.php" method="GET">
			<select name="colour" class="col-md-1" onchange="this.form.submit()">
				<option value="black">Black</option>
				<option value="blue">Blue</option>
				<option value="brown">Brown</option>
				<option value="green">Green</option>
				<option value="red">Red</option>
				<option value="safari-gold">Safari gold</option>
				<option value="silver">Silver</option>
			</select>
		</form>
		
		<p><a href="cars.php" class="btn btn-primary btn-sm col-md-offset-1">Reset Colour</a></p>
	</div>
	-->
	<!-- /part 2 code -->
	
	
	<!-- car list -->
	<div id="car-list" class="row">
		
		<!-- =========================== -->
		<!-- PART 1 CAR LIST PLACEHOLDER -->
		<!-- =========================== -->
		
	</div><!-- /car list -->
	
</div><!-- /main content -->


<?php include('includes/footer.php'); ?>