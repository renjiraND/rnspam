<!DOCTYPE html>
<<?php error_reporting(0); ?>
<?php
if (isset($_POST['KMPButton']))
{
	exec("python twitter.py -kmp \"".$_POST['Konteks']."\" \"".$_POST['Pattern']."\"" , $output);
}

if (isset($_POST['BMButton']))
{
	exec("python twitter.py -bm \"".$_POST['Konteks']."\" \"".$_POST['Pattern']."\"", $output);
}

if (isset($_POST['RegexButton']))
{
	exec("python twitter.py -re \"".$_POST['Konteks']."\" \"".$_POST['Pattern']."\"", $output);
}
?>
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
				<br>
				<label class="w3-text-white"><b>Input Query</b></label>
				<input class="w3-input w3-animate-input w3-border-0 input" autocomplete="off" name="Konteks" type="text" placeholder="insert query here">
				<br>
				<label class="w3-text-white"><b>Input Pattern</b></label>
				<input class="w3-input w3-animate-input w3-border-0 input" autocomplete="off" name="Pattern" type="text" placeholder="insert pattern here">
				<br>
				<label class="w3-text-white"><b>Detection Algorithms</b></label>
				<button class="button" name="KMPButton">KMP</button>
				<button class="button" name="BMButton">Booyer-Moore</button>
				<button class="button" name="RegexButton">Regular Expression</button>
				<a style="width:210px " class="w3-button w3-bottom w3-text-white" name="AboutButton" href="about.html">About</a>
			</form>
		</div>

		<div class="content">
			<h1>Spam Detector App</h1>
			<!-- buat display algo disini -->
			<br>
			<?php
				if (file_exists("data.txt")) {
					$data = json_decode(file_get_contents("data.txt"), true);
					$text = $data['tweets'];
					$i = 0;
					while($i < sizeof($text)):
						if  (($text[$i]['spamidx']=='-1') or ($text[$i]['spamidx']==[])) {
							echo "<header class=\"w3-container w3-green\"><h6>Not a spam</h6></header>";
							echo "<br>";
						}else{
							echo "<header class=\"w3-container w3-red\"><h6>Spam!</h6></header>";
							echo "<br>";
						}
						echo "<div class=\"w3-container tweet\">",$text[$i]['tweet'],"</div>";
						echo "<hr>";
						$i += 1;
					endwhile;
				}
			?>
		</div>
	</body>
</html>
