<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Map Test</title>
</head>
<body>
	<?php
	$bookstore_address = array('Null',
								'台中市西區公益路68號',
								'臺中市北區三民路三段161號');
	?>
	<form method="post" action="showmap.php">
		輸入地址<br>
		<input type="text" name="bookstore" value="<?php echo $bookstore_address[0]; ?>" checked>
		<br>或是選擇下列地點<br>
		<input type="radio" name="bookstore" value="<?php echo $bookstore_address[1]; ?>">
		勤美誠品<br>
		<input type="radio" name="bookstore" value="<?php echo $bookstore_address[2]; ?>">
		中友百貨誠品<br>
		<input type="submit" value="檢視地圖">
	</form>
</body>
</html>