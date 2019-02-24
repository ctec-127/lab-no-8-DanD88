<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Temperature Converter</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
	<!-- jQuery -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!-- include file for the conversion functions -->
<?php require "inc/func.inc.php"; ?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Temperature Scales</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
		<li class="nav-item active">
			<a class="nav-link" href="https://en.wikipedia.org/wiki/Celsius">Celsius<span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="https://en.wikipedia.org/wiki/Fahrenheit">Fahrenheit</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="https://en.wikipedia.org/wiki/Kelvin">Kelvin</a>
		</li>
    </ul>
  </div>
</nav>

<div id="wrapper" class="container mt-4">
	
		<div class="jumbotron bg-info">
			<h1 class="font-weight-bold display-4 ">Temperature Converter</h1>
			
			<p class="font-weight-bold">Use the converter below to convert a temperature to any scale.</p>
			<p class="font-weight-bold"> Conversion formulas and information about temperature scales are below the converter.</p>
			<p class="font-weight-bold">Enjoy!</p>
		</div>
	
	<form class="bg-secondary p-4 rounded" id="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="section form-group">
			<label class="col-form-label col-form-label-lg font-weight-bold" for="temp">Temperature</label>
			<input type="text" class="form-control" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp">

			<select class="custom-select mt-2" name="originalunit">
				<option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
				<option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
				<option value="farenheit"<?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
				<option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
			</select>
		</div>
		<div class="section form-group">
			<label for="convertedtemp" class="col-form-label col-form-label-lg font-weight-bold">Converted Temperature</label>
			<input type="text" class="form-control" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
			name="convertedtemp" size="7" maxlength="7" id="convertedtemp">

			<select name="conversionunit" class="custom-select mt-2">
				<option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
				<option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
				<option value="farenheit"<?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
				<option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
			</select>
		</div>
		<input class="btn btn-primary" type="submit" value="Convert"/>   
	</form>
	
	<div class="container my-4">
		
		<hr>
		<div class="row my-5">
			<div class="col-lg-6">
				<h2 class="font-weight-bold mb-3">Temperature Conversions</h2>
				<hr>
				<h4 class="font-weight-bold">Celsius:</h4>
					<ul class="list-group list-group-flush">
                        <li class="list-group-item font-weight-bold">Celsius to Fahrenheit:</li>
                        <li class="list-group-item">Formula: (0°C × 9/5) + 32 = 32°F</li>
                        <li class="list-group-item lead">Celsius to Kelvin:</li>
                        <li class="list-group-item">Formula: °C + 273.15 = K</li>
					</ul>
					
					<h4 class=" font-weight-bold mt-4">Fahrenheit:</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item lead">Fahrenheit to Celsius:</li>
                    <li class="list-group-item ">Formula: (°F − 32) × 5/9 = °C</li>
                    <li class="list-group-item lead">Fahrenheit to Kelvin:</li>
                    <li class="list-group-item">Formula: (°F − 32) × 5/9 + 273.15 = K</li>
				</ul>
				
				<h4 class="font-weight-bold mt-4">Kelvin:</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item lead">Kelvin to Celsius:</li>
                    <li class="list-group-item">Formula: K − 273.15 = °C</li>
                    <li class="list-group-item lead">Kelvin to Fahrenheit:</li>
                    <li class="list-group-item">Formula:(K − 273.15) × 9/5 + 32 = °F</li>
                </ul>
			</div>
	
			<div class="col-lg-6">
				<h2 class="font-weight-bold">Temperature Scales</h2>
				<hr>
				<h5 class="font-weight-bold">Celsius:</h5>
					<p class="lead">The Celsius scale is also known as the centigrade scale. This Temperature scale is use by the International System of Units (SI). As an SI derived unit, it is used by all countries except the United States[3], the Bahamas, Belize, the Cayman Islands and Liberia. It is named after the Swedish astronomer Anders Celsius (1701–1744), who developed a similar temperature scale.</p>
				<hr>
				<h5 class="font-weight-bold">Fahrenheit:</h5>
				<p class="lead">The Fahrenheit scale is a temperature scale based on one proposed in 1724 by Dutch–German–Polish physicist Daniel Gabriel Fahrenheit (1686–1736).[1] It uses the degree Fahrenheit (symbol: °F) as the unit. Several accounts of how he originally defined his scale exist. The lower defining point, 0 °F, was established as the freezing temperature of a solution of brine made from equal parts of ice, water and salt (ammonium chloride).[2] Further limits were established as the melting point of ice (32 °F) and his best estimate of the average human body temperature (96 °F, about 2.6 °F less than the modern value due to a later redefinition of the scale).[3] The scale is now usually defined by two fixed points: the temperature at which water freezes into ice is defined as 32 °F, and the boiling point of water is defined to be 212 °F, a 180 °F separation, as defined at sea level and standard atmospheric pressure.</p>
			<hr>
			<h5 class="font-weight-bold">Kelvin:</h5>
			<p class="lead">The Kelvin scale is an absolute thermodynamic temperature scale using as its null point absolute zero, the temperature at which all thermal motion ceases in the classical description of thermodynamics. The kelvin (symbol: K) is the base unit of temperature in the International System of Units (SI).</p>

			<p class="lead">Until 2018, the kelvin was defined as the fraction ​1⁄273.16 of the thermodynamic temperature of the triple point of water (exactly 0.01 °C or 32.018 °F).[1] In other words, it was defined such that the triple point of water is exactly 273.16 K.</p>
		
			</div>
		</div>
	</div>
</div><!-- end wrapper div-->
</body>
</html>