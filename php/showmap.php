<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Show Map</title>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
	</script>
	<script type="text/javascript">
		var geocoder;
		var map;

		function initialize()
		{
			geocoder = new google.maps.Geocoder();
			var latlng = new google.maps.LatLng(0,0);
			var myOptions = {zoom:10,center:latlng, mapTypeId:google.maps.MapTypeId.ROADMAP};
			map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
			codeAddress();
		}

		function codeAddress()
		{
			var address = document.getElementById("address").value;
			if (geocoder)
			{
				geocoder.geocode({'address': address}, function(results, status)
				{
					if (status == google.maps.GeocoderStatus.OK)
					{
						map.setCenter(results[0].geometry.location);
						var marker = new google.maps.Marker({map:map,position:results[0].geometry.location});
					}
					else
					{
						alert("檢視地圖失敗，原因：" + status);
					}
				});
			}
		}
		</script>
	</head>
	<body onload="initialize()">
		<input type="hidden" id="address" value="<?php echo $_POST["bookstore"]; ?>">
		<div id="map_canvas" style="width:600px; height:600px;"></div>
		<a href="map.php">上一頁</a>
	</body>
</html>