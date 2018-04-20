<!DOCTYPE html>

<html>
	<head>
		<title>SpamDetectorApp - TubzSteema</title>
		<link rel="stylesheet" href="style.php" media="screen">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
	</head>
	<body>
		<div class="sidenav">
			<form method="post">
				<label class="w3-text-white " font-family="Verdana"><b>Input Query</b></label>
				<input class="w3-input w3-animate-input w3-border" autocomplete="off" name="Konteks" type="text" placeholder="insert query here">
				<label class="w3-text-white"><b>Detection Algorithms</b></label>
				<button class="button" name="KMPButton">KMP</button>
				<button class="button" name="BMButton">Booyer-Moore</button>
				<button class="button" name="RegexButton">Regular Expression</button>
			</form> 
		</div>

		<div class="content">
			<h1>Spam Detector App</h1>
			<hr style="height:30px">
			<?php
				if (file_exists("data.txt")) {
					$data = json_decode(file_get_contents("data.txt"), true);
					$text = $data['text'];
					//print_r($text);
					$i = 0;
					while($i < sizeof($text)):
						echo 
						$text[$i]['test'];
						echo "<br>";
						$i += 1;
					endwhile;
				}
			?>
		</div>
	</body>
</html>
<?php
    if (isset($_POST['KMPButton']))
    {	
		exec("python twitter.py ".$_POST['Konteks'] , $output);
		header("Refresh:0");
    }
?>

