<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <link rel='stylesheet' type='text/css' href='styles.css'/>
    <link rel="stylesheet" type="text/css" href="stylesExtra.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script type='text/javascript' src='script.js'></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steinn,Skæri og Blað</title>
    <style type="text/css">
      a {
        color: blue;
      }
    </style>
</head>
<body>
<?php include('./includes/headermedmenu.php'); ?>
<header>
    <div class="three">
          <h1>Leikur, vinnur þú?</h1>
          <h3>Taktu þátt og þú á möguleika<br>að vinna fría miða á tónleika</h3>
    </div>
</header>
<header>
    <h1>Steinn Skæri Blað</h1>
</header>
<div class="umlykja">
<div class="still">
  <form class="formklass">
    <label class="label-check-radio">Steinn</label>
    <input type="radio" id="steinn" name="gender"  checked> 
    <label class="label-check-radio">Skæri</label>
    <input type="radio" id="skaeri" name="gender"> 
    <label class="label-check-radio">Blað</label>
    <input type="radio" id="blad" name="gender" > 
  </form>

  <p id="pLeikur">&nbsp;</p>
  <button id="hnappur1">Spila</button>

  <!-- <button id="hnappur2"><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/59d2b4cb72e304526cf5b5887147729ea259da78" alt="asd" />Vannst </button>
   --><button id=hnappur2>Nýr Leikur</button>
</div>

  
  <aside class="midjusetning">
   <div class="auglysing ">
        <div class="innihald">
        <h2>Pirrandi auglýsing</h2>
          <div>
            <div class="button blink">
              <a href="http://www.theworldsworstwebsiteever.com/">Click Me<br>Ég er pirrandi!</a>
            </div>
          </div>
        </div>
    </div>
  </aside>
</div>
<div class="clear"></div>
</body>
</html>