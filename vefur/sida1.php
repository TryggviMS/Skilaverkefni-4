<!DOCTYPE html>
<html>
<head>
	<title>Skálmöld</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php include('./includes/headermedmenu.php'); ?>
<header>
	<div class="three">
          <h1>Skráning á Skálmöld</h1>
    </div>
</header>

<div  class="clear"></div>

<article class="split1">
	<h2>Skálmöld</h2>
	<p>
	Skálmöld er íslensk þungarokkshljómsveit sem stofnuð var árið 2009. Þeir spila þjóðlagaþungarokkþ
	</p>
	<p>
	Snæbjörn Ragnarsson and Björgvin Sigurðsson stofnuðu hljómsveitina sem áhugamál en ákváðu þó að taka upp plötu. Íslenskar plötuútgáfur sýndu þeim ekki áhuga en færeyska plötufyrirtækið Tutl ákvað að gefa út fyrstu plötu þeirra; Baldur.
	</p>
	<p>
		Árið 2011 samdi hljómsveitin við plötuútgáfuna Napalm Records og þá fóru hljólin að snúast. Hljómsveitinni var boðið að spila á þungarokkshátíðum og tónleikaferðalögum um Evrópu. Platan Baldur var endurútgefin.
	</p>
	<p>
		<img src="http://nutiminn.is/wp-content/uploads/2014/11/skalmold.jpg">
	</p>
</article>

<aside class="split2">
<form class="formklasi" action="./includes/inserts.php" method="post">
	<label>Skráning fyrir Skálmöld</label>
	<input type="hidden" name="vidburdur" value="skalmold">

	<input type="text" name="kt" placeholder="Kennitala..." required>

	<input type="text" name="nafn" placeholder="Nafn..." required>

    <input type="text" name="netfang" placeholder="Netfang..." required>

	<input type="text" name="simi" placeholder="Símanúmer..." required>
		    
	<input  type="submit" name="submitform" value="Senda" />
</form>
</aside>

<div class="clear"></div>

</body>
</html>