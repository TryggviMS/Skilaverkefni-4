<!DOCTYPE html>
<html>
<head>
	<title>Rammstein</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php include('./includes/headermedmenu.php'); ?>
<header>
	<div class="three">
          <h1>Skráning á Rammstein</h1>
    </div>
</header>

<div  class="clear"></div>

<article class="split1">
	<h2>Rammstein</h2>
	<p>
		Rammstein er þýsk þungarokkhljómsveit sem stofnuð var árið 1994 í Berlín. Í tónlist Rammstein gætir mikilla áhrifa frá raftónlist og iðnaðarrokki en þó er erfitt að setja tónlist sveitarinnar í ákveðinn flokk, henni er gjarnan líkt við tónlist Laibach. Textarnir eru nær eingöngu á þýsku en nokkrir eru á ensku.
	</p>
	<p>
		Allir meðlimir hljómsveitarinnar koma frá hinu fyrrverandi Austur-Þýskalandi, Austur-Berlín og Schwerin nánar tiltekið.
	</p>
	<p>
		Nafn sveitarinnar er dregið af bænum Ramstein í Suður-Þýskalandi þar sem mannskætt slys varð á flugsýningu árið 1988, lagið Rammstein er samið til minningar um þann atburð.
	</p>

	<p>
		<img src="http://www.enter-night.com/bands/images/rammstein/rammstein-1.jpg">
	</p>
</article>

<aside class="split2">
<form class="formklasi"  action="./includes/inserts.php" method="post">
	<label>Skráning fyrir Rammstein</label>
	<input type="hidden" name="vidburdur" value="rammstein">

	<input type="text" name="kt" placeholder="Kennitala..." required>

	<input type="text" name="nafn" placeholder="Nafn..." required>

    <input type="text" name="netfang" placeholder="Netfang..." required>

	<input type="text" name="simi" placeholder="Símanúmer..." required>
		    
	<input  type="submit" name="submitform" value="Senda" />
</form>
</aside>

<div  class="clear"></div>

</body>
</html>