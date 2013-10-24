<?php include('includes/header.php'); ?>
<?php include('data/carData.php'); ?>
<?php require('classes/car.class.php') ?>


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
	
	<?php
		$cars = array();
		
		foreach ($carData as $carUnit){
			
			$cars [] = new Car($carUnit["make"], $carUnit["model"], $carUnit["description"],$carUnit["price"],$carUnit["reg_number"], $carUnit["reg_year"]);
			
		}
		
		//this check if all data is added successfully to the cars array
		//print_r($cars);
		
		$i = 1;
		foreach($cars as $targetCar){
			echo '<b>CAR NO </b>' .$i. '<br/>';
			echo '<b>The Make of this car is</b>' .$targetCar->getMake().' <br/>';
			echo '<b>The Model of this car is</b>' .$targetCar->getModel().' <br/>';
			echo $targetCar->getDescription(). '<br/>';
			echo '<b>The Price of this car is</b>' .$targetCar->getPrice().' <br/>';
			echo '<b>The RegNumber of this car is</b>' .$targetCar->getRegNumber().' <br/>';
			echo '<b>The RegYear of this car is</b>' .$targetCar->getRegYear().' <br/>';
			echo '<b>The Age of the Car is </b>' .$targetCar->getCarAge().'<br/> <br/>';
			
			$i++;
			

			
			
			
		}
		
		
	
	?>
	
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