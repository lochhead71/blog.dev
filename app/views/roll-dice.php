<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Roll the Dice!</title>
</head>
<body>

	<h3>The roll is <?= $roll?></h3>
	<h3>Your guess is <?= $guess?></h3>

	<?php if ($roll != $guess) { ?>
		<h3>Your guess does not match.</h3>
	<?php } else {?>
		<h3>Congratulations! You guess right!</h3>
	<?php } ?>
	
</body>
</html>