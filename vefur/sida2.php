<!DOCTYPE html>
<html>
<head>
	<title>Sólstafir</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php include('./includes/headermedmenu.php'); ?>
<header>
	<div class="three">
          <h1>Skráning á Sólstafi</h1>
    </div>
</header>

<div  class="clear"></div>

<article class="split1">
	<h2>Skálmöld</h2>
	<p>
		Sólstafir er íslensk Þungarokkshljómsveit sem stofnuð var árið 1995. Á þeim tíma sem hún hefur verið starfandi hefur hún gefið út tvær breiðskífur, fjórar smáskífur og þrjá „promo“ diska.
	</p>
	<p
		>Sólstafir var stofnuð af þremur vinum, þeim Aðalbirni Tryggvasyni, Halldóri Einarssyni og Guðmundi Óla Pálmasyni í Janúar árið 1995. Seinna sama ár hljóðritaði hljómsveitin fyrstu hljóðsnældu sína "Í norðri" og við enda ársins tók hún upp seinni hljóðsnældu sína "Til Valhallar".
	</p>
	<p>
		Þegar leið á tíunda áratuginn jukust vinsældir sveitarinnar í Evrópu og hljómsveitin fór í hljómleikaferðalag um álfuna.
	</p>

	<p>
		<img src="http://www.terrorizer.com/terrorizerwordpress/wp-content/uploads/2014/08/solstafirband.jpg">
	</p>
</article>

<aside class="split2">
<form class="formklasi"  action="./includes/inserts.php" method="post">
	<label>Skráning fyrir Sólstafi</label>
	<input type="hidden" name="vidburdur" value="solstafir">

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