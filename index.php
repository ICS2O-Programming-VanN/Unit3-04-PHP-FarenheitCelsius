<html>
  <head>
    <!-- 	Meta Data	 -->
		<meta charset="UTF-8">
		<meta name="Van" content="My website in PHP">
		<meta name="keywords" content="immaculata, ics2o">
		<meta name="DESCRIPTION" content="Farenheit to Celsius Program, Using PHP">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <title>Farenheit to Celsius Program, Using PHP</title>
    <!-- Links to style.css file -->
		<link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
		<!-- Heading and paragraph -->
    <?php
			echo '<center><h1>Farenheit to Celsius Program, Using PHP</h1></center><br>';
			echo "<p>This website allows you to convert Farenheit to Celsius! <br> Enter the temperature in farenheit below:</p>";
		?>
		<!-- Text field and button (Takes Input) -->
		<form method = "post">
      Radius (cm): <input type="float" name="farenheit"> <br>
			<br><br>
			<input type ="submit" name ="submit"  value="Convert">
		<!-- Calculations for Volume (With User Input) -->
		<?php
			if(isset($_POST['submit'])) {
        $farenheit = $_POST['farenheit']; // Input for the radius
				$volume = (4 / 3) * pow($radius, 3) * pi(); // Calculations for Volume
				$volume = number_format($volume, 2); // Rounds to nearest hundredth 
        echo "<br><br><h4>With a radius of " . $radius . "cm;</h4>";
				echo "<h4>The Volume of this Sphere is " . $volume . "cm<sup>3</sup></h4><br>"; // Outputs Volume
			}
		?>
  </body>
</html>