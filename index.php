<html>
  <head>
    <!-- 	Meta Data	 -->
		<meta charset="UTF-8">
		<meta name="Van" content="My website in PHP">
		<meta name="keywords" content="immaculata, ics2o">
		<meta name="DESCRIPTION" content="Fahrenheit to Celsius Program, Using PHP">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <title>Fahrenheit to Celsius Program, Using PHP</title>
    <!-- Links to style.css file -->
		<link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
		<!-- Heading and paragraph -->
    <?php
			echo '<center><h1>Fahrenheit to Celsius Program, Using PHP</h1></center><br>';
			echo "<p>This website allows you to convert Fahrenheit to Celsius! <br> Enter the temperature in Fahrenheit below:</p>";
		?>
		<!-- Text field and button (Takes Input) -->
		<form method = "post">
      Fahrenheit (℉): <input type="float" name="fahrenheit"> <br>
			<br><br>
			<input type ="submit" name ="submit"  value="Convert">
		<!-- Calculations for Fahrenheit to Celsius (With User Input) -->
		<?php
			if(isset($_POST['submit'])) { // When Button clicked
        $fahrenheit = $_POST['fahrenheit']; // Input for the Fahrenheit
				$celsius = floatval(5 / 9) * floatval($fahrenheit - 32); // Calculations for Fahrenheit to Celsius
        echo "<br><br><h4>With a temperature of " . $fahrenheit . "℉;</h4>";
				echo "<h4>The temperature in celsius is " . round($celsius) . "℃</h4>"; // Outputs Celsius
        echo "<h4>If you'd like a more specific number, the temperature in Celsius unrounded is: " . $celsius . "C°</h4>";
			}
		?>
  </body>
</html>