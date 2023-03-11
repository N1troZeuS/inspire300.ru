<!DOCTYPE html>
<html lang="RU-ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.ico" type="image/png">
    <title>XSS Game</title>
</head>
<body class="black-bg text-green">
<?php require 'module/header.php';?>
<main>
	<div class="px-4 py-5 my-5 text-center">
		<h1 class="display-5 fw-bold">Прохождение <a href="https://xss-game.appspot.com" target="_blank">XSS</a> игры.</h1>
		<div class="col-lg-6 mx-auto">
			<p class="lead mb-4">XSS — это тип атаки на веб-системы, заключающийся во внедрении в страницу вредоносного кода. Является разновидностью атаки «Внедрение кода». Если говорить проще, то это исполнение JavaScript кода, который попадает в структуру сайта самыми разными путями. Именно способы внедрения JS кода и рассматриваются в этой игре.</p>
		</div>
	</div>
	<div class="container col-xxl-8 px-4 py-5">
		<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
			<div class="col-10 col-sm-8 col-lg-6">
				<img src="img/xss/prev.png" class="d-block mx-lg-auto img-fluid" width="700" height="500">
			</div>
			<div class="col-lg-6">
				<h1 class="display-5 fw-bold lh-1 mb-3">Предисловие</h1>
				<p class="lead">Для понимания этого разбора нужно иметь представление о HTML и JavaScript. А теперь переходим самой игре. Она, конечно же в браузере, <a href="https://xss-game.appspot.com" target="_blank">вот тут</a>. Сам сайт на английском, легко переводится на русский через расширения для браузера. Конечно, иногда бывают моменты, когда перевод получается неосмысленный, в таких случаях нужнно пытаться понять, а что же все таки имели в виду авторы. По интерфейсу все просто. В самом начале страницы расположилось задание (Mission Description + Mission Objective). Есть исходный код сайта, который мы атакуем (Target code). Ну и подсказки, куда же без них (Hints). Они не всегда полезные, но все же. А цель каждого уровня - вывести уведомление на сайте. На самом деле, если получится вывести уведомление, значит и данные с какого-нибудь сайта можно попробовать вытащить. Следует отметить, что большинство сайтов хорошо защищены от таких простых атак. А так же отметим, что воровать данные с сайтов нехорошо и за это можно получить реальный срок. Ну а теперь начнем!</p>
			</div>
		</div>
	</div>
	<h1 class="display-5 fw-bold lh-1 mb-3 text-center">Итак, начнем!</h1>
	<div class="container col-xxl-8 px-4 py-5">
		<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
			<div class="col-10 col-sm-8 col-lg-6">
				<img src="img/xss/xss1.png" class="d-block mx-lg-auto img-fluid" width="700" height="500">
			</div>
			<div class="col-lg-6">
				<h1 class="display-5 fw-bold lh-1 mb-3">Первый уровень</h1>
				<p class="lead"></p>
			</div>
		</div>
	</div>
	<div class="container col-xxl-8 px-4 py-5">
		<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
			<div class="col-10 col-sm-8 col-lg-6">
				<img src="img/xss/xss2.png" class="d-block mx-lg-auto img-fluid" width="700" height="500">
			</div>
			<div class="col-lg-6">
				<h1 class="display-5 fw-bold lh-1 mb-3">Второй уровень</h1>
				<p class="lead">Второй уровень интереснее. Имеется подобие онлайн-чата. Вводить то же самое, что и на прошлом уровне в поле для текста уже не получится, увы. Зато если прописать тэг img и в него вписать <xmp>onload="javascript:alert('XSS')</xmp> А по итогу все, что нужно написать в тектовое поле вот<xmp><img src="" onload="javascript:alert('XSS');"></xmp></p>
			</div>
		</div>
	</div>
</main>
<?php require 'module/footer.php';?>
</body>
</html>