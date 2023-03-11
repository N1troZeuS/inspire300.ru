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
	<div class="px-4 py-5 my-5 text-center text-light" id="contact">
        <h1 class="display-5 fw-bold">Контакты</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Если у Вас есть вопросы, предложения, жалобы или желание создать совместный проект, то ниже приведены все способы связаться со мной. </p>
        </div>
    </div>
    <div class="container text-green">
        <div class="rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Discord</h1>
                <p class="col-md-8 fs-4">У меня есть сервер в Discord, можете присоединиться туда. Как только вы перейдете на канал, там будет подробное руководство о том, как пользоваться сервером! </p>
                <a class="animated-button-ds" type="button" href="https://discord.gg/mNf8xfWW" target="_blank">discord</a>
            </div>
        </div>
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-dark rounded-3 mt-1">
                    <h2>VK</h2>
                    <p>Если Discord Вам не подходит, то есть Вконтакте! Там вы можетезадать вопрос личным сообщением мне. По кнопке ниже мой аккаунт.</p>
                    <a class="animated-button-vk" type="button" href="https://vk.com/inspire300" target="_blank">Вконтакте</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 border rounded-3 rounded-3 mt-1">
                    <h2>Электронная почта</h2>
                    <p>Разное бывает, поэтому на всякий случай оставляю свою электронную почту, которую я проверяю каждый день. Туда тоже можно писать по любым вопросам, обязательно отвечу!</p>
                    <p><big><xmp>iminspir3@gmail.com</xmp></big></p>
                </div>
            </div>
        </div>
    </div>
<?php require 'module/footer.php';?>
</body>
</html>