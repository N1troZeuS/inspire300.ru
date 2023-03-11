<!DOCTYPE html>
<html lang="RU-ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.ico" type="image/png">
    <title>INSPIRE</title>
</head>
<body class="black-bg text-green">
<?php require 'module/header.php';?>
    <!-- Я инспайр -->
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img width="100%" src="img/logo.png">
            </div>
            <div class="col-lg-6 text-green">
                <h1 class="display-5 fw-bold lh-1 mb-3">INSPIRE</h1>
                <p class="lead">Да, это я INSPIRE. На сайте вы найдете много интересного. Возможно скоро тут будет руководство по тому, как пользоваться сайтом. </p>
            </div>
        </div>
    </div>
    <!-- XSS игра -->
    <div class="px-4 pt-5 my-5 text-center">
        <h1 class="display-4 fw-bold">Прохождение XSS игры</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Прохождение игры, в которой разбираются XSS атаки на разных уровней.</p>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <img src="img/xss/prev.png" class="img-fluid rounded-3 shadow-lg mb-4" width="700" height="500">
            </div>
        </div>
        <div class="col-lg-6 mx-auto">
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <a class="animated-button" href="/xss">XSS GAME</a>
            </div>
        </div>
    </div>
    <!-- галерея -->
    <div class="px-4 py-5 text-center">
        <div class="py-5 text-green">
            <h1 class="display-5 fw-bold">Это сделала нейронная сеть</h1>
            <div class="col-lg-6 mx-auto"></p>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card">
                            <img src="img/img/best/maybach.png">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="img/img/best/ghost.png">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="img/img/best/milk.jpg">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="img/img/best/hack.png">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="img/img/best/room.png">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="img/img/best/neon_bird.png">
                        </div>
                    </div>
                    <div class="col-lg-6 mx-auto mt-4">
                        <a class="animated-button" href="/galery">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    <!-- проекты -->
    <div class="container">
		<div class="px-4 py-5 text-center">
			<h1 class="display-5 fw-bold">Мои Проекты</h1>
		</div>
		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading fw-normal lh-1">Первый серьезный проект <span class="text-muted">- Этот сайт</span></h2>
				<p class="lead">Создание сайта - трудоемкий процесс. Нужно знать и HTML, JavaScript и CSS. Только при правильном сочетании этих трех компонентов можно получить действительно годный продукт. Так как я только начинаю свой путь, то пришлось самому разбираться во всех темах, решать все вознкающие проблемы самому. Проделав колоссальную работу, ошибаясь и узнавая новое я создал этот сайт.</p>
			</div>
			<div class="col-md-5">
				<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="img/img/batman.png" width="400" height="auto">
			</div>
		</div>
		<div class="px-4 py-5 my-5 text-center">
			<h2 class="featurette-heading fw-normal lh-1">Сайт про <span class="text-muted">Сыр</span></h2>
			<div class="col-lg-6 mx-auto">
				<p class="lead mb-4">Мой родственник выиграл грант, который направлен на поддержку индивиуальных предпринимателей. Поэтому я решил сделать ему сайт, на котором его аудитория сможет ознакомится с его продуктом. </p>
				<a class="animated-button" href="https://yumycheese.github.io/cheese/" target="_blank">Сырный уголок</a>
			</div>
		</div>
		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading fw-normal lh-1">Доклад по <span class="text-muted">полупроводникам</span></h2>
				<p class="lead">На кружке по фиизике мне предложили сделать доклад по полупроводникам. Я охотно взялся за дело и за неделю тщательного изучения темы уже рассказывал всем сверстникам о полупроводниках на этом самом кружке. Получилось неплохо, все описано простым и понятным яыком. Если есть желание, можете скачать доклад по кнопке ниже.</p>
				<a class="animated-button" href="/img/maybach2.png" download="">Доклад</a>
			</div>
			<div class="col-md-5">
				<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="img/img/maybach2.png" width="400" height="auto">
			</div>
		</div>
		<div class="row featurette mt-5">
			<div class="col-md-7">
				<h2 class="featurette-heading fw-normal lh-1">Проект к 11 классу <span class="text-muted">на тему "Нейронные сети"</span></h2>
				<p class="lead">В нашей школе в аттестат идут не только обычные оценки, но и оценка за проектную деятельность. Тема может быть любая, я выбрал нейросети, ведь это очень интересно и увлекательно. Проект пока в процессе. В процессе вовсе не означает, что я выбрал только тему и все. Ведется огромное количество работ, детальное изучение темы для глубокого понимания. Стоит отметить, что у проекта все таки есть какие-то ограничения и требования. Сейчас все согласовывается и обсуждается с судейством и организаторами. В качестве примеров нейросетей будут представлены <a href="https://www.midjourney.com/home/" target="_blank">Midjourney</a> и <a href="https://thispersondoesnotexist.xyz/" target="_blank">Генератор лиц</a>. Как только проект будет закончен, прямо тут появится кнопка для того, чтобы его скачать. </p>
			</div>
			<div class="col-md-5">
				<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="img/img/me.png" width="400" height="auto">
			</div>
		</div>
    </div>
    <!-- мои достижения НАПИСАТЬ ПРО 3 МЕСТО НА МЕЖВЕЖЕ ПО МАТАНУ-->
    <div class="px-4 py-5 text-center">
        <h1 class="display-5 fw-bold">Моя Жизнь. Мои Достижения.</h1>
    </div>
    <div class="modal modal-alert position-static d-block py-5 text-dark" tabindex="-1" role="dialog" id="modalChoice">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-3 shadow">
                <div class="modal-body p-4 text-center">
                    <h5 class="mb-0">Межведомственная олимпиада по Математике</h5>
                    <p class="mb-0">4 февраля 2023 года поучавствовал в олимпиаде по математике, которая проводилась в онлайн формате. Занял третье место, готовлюсь к следующему году чтобы показать еще более сильный результат</p>
                </div>
                <div class="modal-footer flex-nowrap p-0">
                    <a href="https://v-olymp.ru/volimp_math/news/" target="blank" type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end"><strong>Сайт олимпиады</strong></a>
                    <a href="img/img/olymp.png" target="blank" type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal">Мой диплом</a>
                </div>
            </div>
        </div>
    </div>
    <div class="album py-5">
        <div class="container">
            
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                <div class="col">
                    <div class="card shadow-sm bg-dark text-green">
                        <img src="img/me/nto1.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%">
                        <div class="card-body">
                            <p class="card-text">В нашей школе состоялся Второй муниципальный открытый НТО-хакатон. На мероприятии присутствовали почётные гости: Начальник управления образования Администрации городского округа Чехов Ирина Анатольевна Заболотнева, заместитель директора ЦНППМ АСОУ Нина Александровна Кочеткова, начальник отдела учебно-методического центра Светлана Николаевна Хрипач, методист учебно-методического центра Ольга Владимировна Мишура.</p>
                            <small class="text-muted">11.10.2022</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm bg-dark text-green">
                        <img src="img/me/me.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%">
                        <div class="card-body">
                            <p class="card-text">1 Сентября, в день знаний, Денис Александрович Лебедев - чемпион мира по боксу - вручил мне золотой значок ГТО 4 ступени на школьной линейке.</p>
                            <small class="text-muted">01.09.2022</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm bg-dark text-green">
                        <img src="img/me/me1.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%">
                        <img src="img/me/me2.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%">
                        <div class="card-body">
                            <p class="card-text">Состоялась встреча с главой городского округа Чехов - Григорием Игоревичем Артамоновым. Я стал призером международного движения WorldSkills, заняв 3 место. Григорий Игоревич пригласил всех участников движения на чаепитие, лично вручил подарки призерам и победителям.</p>
                            <small class="text-muted">11.03.2022</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm bg-dark text-green">
                        <img src="img/me/nto.jpg" class="bd-placeholder-img card-img-top" width="100%" height="100%">
                        <div class="card-body">
                            <p class="card-text">Наша команда "Hello World" вышла в финал Национальной Технической Олимпиады по профилю Автономные Транспортные Системы. На финальном этапе мы заняли седьмое место. Нашей задачей было написать программу, используя нейросеть <a href="https://opencv.org/" target="_blank">Opencv2</a>, благодаря которой EyeCar (машинка с камерой) будет ехать строго в своей полосе, останавливаться на красный цвет светофора и ехать на зеленый. Так же Программировали сортировочный конвейер, использовали ту же нейросеть oencv2. Это был наш первый опыт, мы показали достойный уровень, все члены команды с поставленной задачей справились.</p>
                            <small class="text-muted">15.02.2022</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- контакты -->
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
    <!-- дисклеймер -->
    <div class="container px-4 py-5 text-green">
        <h2 class="pb-2">Дисклеймер</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col">
                <h3 class="fs-2">Безопасность</h3>
                <p>Сайт использует защищенное подключение по протоколу HTTPS, который обеспечивает Ваше безопасное пребывание на сайте.</p>
            </div>
            <div class="feature col">
                <h3 class="fs-2">Cookie</h3>
                <p>Мы не используем Cookie. Сайт не собирает Ваши данные, не хранит историю Вашей активности.</p>
            </div>
            <div class="feature col">
                <h3 class="fs-2">Изображения и контент</h3>
                <p>На сайте много изображений. Все они сгенерированны нейронной сетью <a href="https://midjourney.com/home/" target="_blank">Midjourney</a>. Таким образом, право на их использование принадлежит только мне. Все картинки, сделанные нейронной сетью <a href="/galery">тут</a>.</p>
            </div>
        </div>
    </div>
<?php require 'module/footer.php';?>
</body>
</html>