<!DOCTYPE html>

<html>
	<head>
		<title>SpamDetectorApp - TubzSteema</title>
		<link rel="stylesheet" href="style.php" media="screen">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">

		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>
	<body>
		<div class="sidenav">
			<form method="post">
				<label class="w3-text-white"><b>Input Query</b></label>
				<input class="w3-input w3-animate-input w3-border" autocomplete="off" name="Konteks" type="text" placeholder="insert query here">
				<label class="w3-text-white"><b>Detection Algorithms</b></label>
				<button class="button" name="KMPButton">KMP</button>
				<button class="button" name="BMButton">Booyer-Moore</button>
				<button class="button" name="RegexButton">Regular Expression</button>
			</form>
		</div>

		<div class="content">
			<h1>Spam Detector App</h1>
			<div class="w3-card-4">
				<?php
						if (file_exists("data.txt")) {
							$data = json_decode(file_get_contents("data.txt"), true);
							$text = $data['tweets'];
							//print_r($text);
							$i = 0;
							echo sizeof($text);
							while($i < sizeof($text)):
								if  ($text[$i]['spamidx']=='-1') {
									echo "<header class=\"w3-container w3-green\"><h6>Not a spam</h6></header>";
									echo "<br>";
								}else{
									echo "<header class=\"w3-container w3-green\"><h6>Spam!</h6></header>";
									echo "<br>";
								}
								echo "<div class=\"w3-container tweet\">",$text[$i]['tweet'],"</div>";
								echo "<hr>";
								$i += 1;
							endwhile;
						}
					?>
			</div>
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
