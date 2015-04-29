<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Map Test</title>
</head>
<body>
	<?php
	$bookstore_address = array('台中市西區公益路68號',
								'臺中市北區三民路三段161號');
	?>
	<form method="post" action="showmap.php">
		<input type="radio" name="bookstore" value="<?php echo $bookstore_address[0]; ?>" checked>
		勤美誠品<br>
		<input type="radio" name="bookstore" value="<?php echo $bookstore_address[1]; ?>">
		中友百貨誠品<br>
		<input type="submit" value="檢視地圖">
	</form>
</body>
</html>