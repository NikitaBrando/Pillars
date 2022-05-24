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
<link rel="stylesheet" type="text/css" href="/css/style.css">

</head>
<body>
	<div class="head_back">	

	<?php 
    require "blocks/header2.php"
  	?>

  	<section class="parr">
	<img src="imagge/Sky.png" id="bg">
	<img src="imagge/moon.png" id="moon">
	<img src="imagge/Pillars.png" id="mountain">
	<img src="imagge/Water.png" id="road">

	<h2 id="text">Ленские столбы</h2>

	<script type="text/javascript">
		let bg = document.getElementById("bg");
		let moon = document.getElementById("moon");
		let mountain = document.getElementById("mountain");
		let road = document.getElementById("road");
		let text = document.getElementById("text");

		window.addEventListener('scroll', function(){
			var value = window.scrollY;

			bg.style.top = value * 0.5 + 'px';
			moon.style.left = value * 0.5 + 'px';
			mountain.style.top = value * -0.1 + 'px';
			road.style.top = value * 0 + 'px';
			text.style.top = value * 1 + 'px';
		})
	</script>
</section>

	</div>
	<main>
	<div class="container">
		<div class="top">    
         <h2 >Ленские столбы</h2>
          <p class="centraly1 firsttxt">Ленские столбы представляют собой тянущийся на многие километры<br> 
комплекс вертикально вытянутых скал,<br> 
причудливо громоздящихся вдоль берега Лены,<br> 
глубокой долиной, прорезающей Приленское плато.<br>
Дата образования:1995 г.<br>
Площадь:12 179 км²</p>
      </div>

    
  <div class="centraly1">
    <p>Природный парк «Ленские столбы»<br> был организован на основании указа президента Республики< Саха (Якутия)<br> от 16 августа 1994 года № 837 и постановления правительства от 10 февраля 1995 года<br> и подчиняется региональному министерству охраны природы.<br> Площадь парка — 1353 тыс. га, парк состоит из двух филиалов — «Столбы» и «Синский».<br> Основной задачей парка считается развитие экологического туризма</p>
  </div>
    <div class="centraly2">
    <div class="mapss">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15423.159198963649!2d127.35312684950014!3d61.105150615765176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5c09141ea8c5c6e7%3A0xc69eb55364394cd8!2z0J3QsNGG0LjQvtC90LDQu9GM0L3Ri9C5INC_0LDRgNC6ICLQm9C10L3RgdC60LjQtSDQodGC0L7Qu9Cx0Ysi!5e0!3m2!1sru!2sru!4v1638330212752!5m2!1sru!2sru"   allowfullscreen="" loading="lazy"></iframe> 
    </div>
  </div>
<div class="centraly1">
	<p class="onastext">В летний туристский сезон по автодороге "Умнас" по маршруту г. Якутск - г. Покровск (78 км.) - с. Булгунняхтах (114 км.) - с. Улахан-Аан (142 км.) - с. Тит-Ары (179 км.) - с. Тумул (192 км.) - с. Батамай (204 км.). Переправа через р. Лена к местности Лабыйа на маломерных судах с близлежащих населенных пунктов (с. Тит-Ары, с. Тумул, с. Батамай) в зависимости от уровня воды.<br><br>

В зимний туристский сезон по автодороге "Умнас" по маршруту г. Якутск - с. Улахан-Аан (142 км.), далее по автозимнику по маршруту с. Улахан-Аан - с. Батамай (62 км.). С села Батамай 5 км. по автозимнику к местности Лабыйа</p>
	<a href="intermap.php" class="butt">Посмотреть маршрут</a>
</div>

  <section class="sectionz">
  <div class="container reveal">
    <h2>Отзывы</h2>
    <div class="text-container">
      
        <div class="text-box">
        <h3>Лариса Григорьева</h3>
        <p class="boxes">
         Ну красота конечно! Особенно когда на Михаила Светлове ,обслуживание просто отличное,ребята их Белоруссии такие лампочки,еда,ммм ,слов нет.
        </p>

      </div>
      <div class="text-box">
      	
        <h3> Алексей Верещагин</h3>
        <p class="boxes">
         Красиво. Достаточно популярное и людное место. Были в конце марта. Есть что посмотреть и сделать классные фото. Отличная пешая прогулка на верх. Пенсионеров и толстяков порой бывает жалко, как они туда поднимаются с отдышкой это надо было видеть. Маленьких детей с собой брать не стоит, больше суеты и нагрузки))). Всем советую посетить! Хочу на прогулочном корабле летом прокатиться!
        </p>
      </div>
        <div class="text-box">
        <h3>Анатолий Попов</h3>
        <p class="boxes">
         Интересное место и сам путь до Ленских столбов.
        </p>
      </div>
      
    </div>

  </div>
</section>
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

 <script type="text/javascript">
    function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}


window.addEventListener("scroll", reveal);
  </script>
  
</body>
</html>