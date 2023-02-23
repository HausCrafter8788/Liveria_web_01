<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" href="img/logo.png" type="image/png">
		<title>Home Liveria VTC</title>
	</head>
	<body>
		<style type="text/css">
			body{
				background: url(images/<?php echo $selectedBg; ?>) no-repeat;
			}
		</style>
	</body>
</html>