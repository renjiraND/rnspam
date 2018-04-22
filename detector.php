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
	</head>

	<body>
		<div class="sidenav">
			<form method="post" class="w3-container">
				<br>
				<label class="w3-text-white"><b>Input Query</b></label>
				<input class="w3-input w3-animate-input w3-border-bottom w3-border-red input" autocomplete="off" name="Konteks" type="text" placeholder="insert query here">
				<br>
				<label class="w3-text-white"><b>Input Pattern</b></label>
				<input class="w3-input w3-animate-input w3-border-bottom w3-border-red input" autocomplete="off" name="Pattern" type="text" placeholder="insert pattern here">
				<br>
				<label class="w3-text-white"><b>Detection Algorithms</b></label>
				<button class="button" name="KMPButton">KMP</button>
				<button class="button" name="BMButton">Booyer-Moore</button>
				<button class="button" name="RegexButton">Regular Expression</button>
			</form>
			<a style="width:100%" class="w3-button w3-text-white w3-display-bottomleft" name="AboutButton" href="about.html">About</a>
		</div>

		<div class="content">
			<div class="sticky">Spam Detector App</div>
			<br>
			<div class="w3-container">
				<?php
					if (file_exists("data.txt")) {
						$data = json_decode(file_get_contents("data.txt"), true);
						$text = $data['tweets'];
						$query = $data['query'];
						$pattern = $data['pattern'];
						echo "<div class=\"stcky\">query : ", $query, "</div>";
						echo "<div class=\"stcky\">pattern : ", $pattern, "</div>";
						$i = 0;
						while($i < sizeof($text)):
							echo "<br><div class=\"w3-card-4\">";
							if  (($text[$i]['spamidx']=='-1') or ($text[$i]['spamidx']==[])) {
								echo "<header class=\"w3-container w3-green\"><h5>Not a spam</h5></header>";
							}else{
								echo "<header class=\"w3-container w3-red\"><h5>Spam!</h5></header>";
							}
							echo "<div class=\"w3-container\"><p>",$text[$i]['tweet'],"</p></div></div>";
							$i += 1;
						endwhile;
					}
				?>
			</div>
		</div>
	</body>
</html>
