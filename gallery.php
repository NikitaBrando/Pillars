<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lena Pillars</title>
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="sytle/stylecss2.css">
</head>
<body>
		
	<?php 
    require "blocks/header2.php"
  	?>
		
	<main>
		<H2>Галерея</H2>
	<div class="container">
  <div class="adaptivSlayder">

  <input type="radio" name="kadoves" id="slaid1" checked>

  <input type="radio" name="kadoves" id="slaid2">

  <input type="radio" name="kadoves" id="slaid3">

   

  <div class="kadoves">

  <label for="slaid1"></label>

  <label for="slaid2"></label>

  <label for="slaid3"></label>

  </div>

   

  <div class="adaptivSlayderlasekun">

  <div class="abusteku-deagulus">

  <img src="imagge/Ленские-столбы_2-809x610.jpg"/>

  <img src="imagge/79dd95df-cd28-4903-9f5b-d5c722f818f0.jpg"/>

  <img src="imagge/zp6Z7b0H4Qg.jpg"/>

  </div>

  </div>

</div>
  

  </div>
  

  
	</main>
	
	<?php 
    require "blocks/footer.php"
  	?>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" integrity="sha256-huW7yWl7tNfP7lGk46XE+Sp0nCotjzYodhVKlwaNeco=" crossorigin="anonymous"></script>
<script>
SmoothScroll({
    animationTime    : 800,
    stepSize         : 75,
    accelerationDelta : 30,  
    accelerationMax   : 2,   

    keyboardSupport   : true,  
    arrowScroll       : 50,
    pulseAlgorithm   : true,
    pulseScale       : 4,
    pulseNormalize   : 1,
    touchpadSupport   : true,
})
</script>	
</body>
</html>