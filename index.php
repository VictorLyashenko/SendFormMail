<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>МОЯ ШКОЛА ВЕРСТКИ</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<header class="header" id="header">
		<div class="container">
			<div class="nav d-flex">
				<div class="nav__logo d-flex">
					<div class="logo__icon">
						<i class="fa fa-plug"></i>
					</div>
					<div class="logo__title">
						<span class="logo__text">Моя школа</span>	
						<span class="logo__text logo__text_bold">верстки</span>
					</div>
				</div>
				<ul class="nav__menu d-flex">
					<li class="nav__item">
						<a class="nav__link" href="#">Знаете ли вы</a>
					</li>
					<li class="nav__item">
						<a class="nav__link" href="#">Зачем</a>
					</li>
					<li class="nav__item">
						<a class="nav__link" href="#">Кому</a>
					</li>
					<li class="nav__item">
						<a class="nav__link" href="#">Регистрация</a>
					</li>
				</ul>
				<div class="nav__phone">
					<i class="fa fa-phone"></i>
					+7 (495) 567-564-12
				</div>
			</div>
		</div>
	</header>
	<section class="proffisional" id="proffisional">
		<div class="container">
			<div class="offer d-flex justify-content-between">
				<div class="master">
					<div class="master__cap">
						<i class="fa fa-graduation-cap"></i>
							Онлайн-мастер-класс
					</div>
					<h1 class="master__title">
						Я — профессиональный веб-верстальщик
					</h1>
					<div class="master__time">
						<p>
							9 апреля в 18:00
						</p>
					</div>
				</div>
				<div class="registration">
					<div class="registration__box">
						<div class="registration__title">
							Забронировать участие
						</div>
						<p class="registration__text">
							Чтобы стать профессионалом в  HTML и CSS, а также делать WOW
						</p>
						<form action="success.php" class="registration__form js-form" id="popupResult">
							<input type="text" class="registration__input" placeholder="Введите имя" name="name" required>
							<input type="email" class="registration__input" placeholder="Введите E-mail" name="email" required>
							<input type="tel" class="registration__input" placeholder="Введите телефон" name="tel" required>
							<button class="registration__btn" data-submit >Оставить заявку</button>
						</form>
						<div class="registration__data">
							Ваши данные под защитой
						</div>
					</div>
				</div>
				<!-- Индикация процесса отправки формы -->
				<div id="loader">
					<img src="img/ripple.svg">
				</div>
				
				<!-- Сообщение "спасибо" после отправки формы -->
				<div id="overlay">
					<div id="thx">
						Спасибо! Мы обязательно вам перезвоним
					</div>
			   	</div>
			</div>
		</div>
	</section>
	<section class="know" id="know">
		<div class="container">
			<div class="author d-flex">
				<div class="author__info">
					<div class="author__name">
						Виктор Ляшенко
					</div>
					<div class="author__details">
						<p class="author__line">
							Ведущий мастер-класса
						</p>
						<p class="author__line">
							Веб-верстальщик и фрилансер
						</p>
					</div>
					<div class="author__digits d-flex">
						<div class="author__element d-flex align-items-center">
							<div class="author__icon">
								100+
							</div>
							<div class="author__text author__text_long">
								Созданных сайтов
							</div>
						</div>
						<div class="author__element d-flex align-items-center">
							<div class="author__icon">
								8
							</div>
							<div class="author__text author__text_short">
								Лет опыта
							</div>
						</div>
					</div>
					<a href="#" class="author__link link">
						Узнать больше
					</a>
				</div>
				<div class="question">
					<h2 class="question__title">
						Знаете ли вы?
					</h2>
					<p class="question__text">
						По статистике, среднестатистический фрилансер зарабатывает около <b>30 тысяч рублей</b> в месяц. Чаще всего, гораздо меньше этой цифры.
					</p>
				</div>	
			</div>
			<div class="query d-flex">
				<div class="question question_white">
					<h2 class="question__title">
						Хм...
					</h2>
					<p class="question__text">
						Почему же так мало? Чего не хватает фрилансерам, чтобы “пробить потолок” хотя бы...
					</p>
				</div>
				<div class="amount d-flex">
					<div class="amount__money">
						$1000
						<span>
							в месяц?
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="show" id="show">
		<div class="container">
			<div class="show__title">
				<h2 >
					Я покажу, <br> как мне удается...
				</h2>
			</div>	
			<div class="success d-flex">
				<div class="success__part">
					<div class="success__item d-flex">
						<span class="success__digits">
							1
						</span>
						<div class="success__info">
							<div class="success__title">
								Зарабатывать тысячи долларов
							</div>
							<p class="success__text">
								Исключительно с помощью веб-верстки и навыков разработки сайтов
							</p>
						</div>
					</div>
				</div>
				<div class="success__part">
					<div class="success__item d-flex">
						<span class="success__digits">
							2
						</span>
						<div class="success__info">
							<div class="success__title">
								Работать в путешествиях
							</div>
							<p class="success__text">
								Без возврата домой, используя ноутбук и все возможности фриланса
							</p>
						</div>
					</div>
				</div>
				<div class="success__part">
					<div class="success__item d-flex">
						<span class="success__digits">
							3
						</span>
						<div class="success__info">
							<div class="success__title">
								Быть на шаг впереди конкурентов
							</div>
							<p class="success__text">
								Используя проверенные стратегии развития, общения и работы с клиентами
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="you" id="you">
		<div class="container">
			<div class="you__title">
				<h2>
					Если вы
				</h2>
			</div>	
			<div class="block d-flex justify-content-between">
				<div class="block__element blok__element_green">
						<i class="block__icon far fa-flag"></i>
					<div class="block__title">
						Начинающий <br>веб-верстальщик
					</div>
				</div>
				<div class="block__element blok__element_blue">
						<i class="block__icon far fa-money-bill-alt"></i>
					<div class="block__title">
						Не довольны доходами на фрилансе
					</div>
				</div>
				<div class="block__element blok__element_red">
						<i class="block__icon far fa-meh"></i>
					<div class="block__title">
						На фрилансе >2 лет, но ваш доход < $1000
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="reg" id="reg">
		<div class="container">
			<div class="offer offer__reg d-flex justify-content-between">
				<div class="master master__reg">
					<div class="master__cap master__cap_white">
						<i class="fa fa-graduation-cap"></i>
							Онлайн-мастер-класс
					</div>
					<h1 class="master__title master__title_white">
						Не потеряйте уникальную возможность. Бронируйте участие уже сегодня!
					</h1>
					<div class="master__date d-flex justify-content-center">
						<i class="far fa-clock"></i>
						<p>
							9 апреля в 18:00
						</p>
						<i class="fas fa-users"></i>
						<p>
							Всего 40 мест
						</p>
					</div>
				</div>
				<div class="registration reg__registration">
					<div class="registration__box">
						<div class="registration__title">
							Забронировать участие
						</div>
						<p class="registration__text">
							Чтобы стать профессионалом в  HTML и CSS, а также делать WOW
						</p>
						<form action="#" class="registration__form">
							<input type="text" class="registration__input" placeholder="Введите имя" name="name" required>
							<input type="email" class="registration__input" placeholder="Введите E-mail" name="email" required>
							<input type="tel" class="registration__input" placeholder="Введите телефон" name="tel" required>
							<button class="registration__btn" type="submit">Оставить заявку</button>
						</form>
						<div class="registration__data">
							Ваши данные под защитой
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer" id="footer">
		<div class="container">
			<div class="footer__info d-flex">
				<div class="footer__logo d-flex">
					<div class="logo__icon">
						<i class="fa fa-plug"></i>
					</div>
					<div class="logo__title">
						<span class="logo__text">Моя школа</span>	
						<span class="logo__text logo__text_bold">верстки</span>
					</div>
				</div>
				<p class="footer__text">
					Все права защищены
				</p>
				<div class="nav__phone">
					<i class="fa fa-phone"></i>
					+7 (495) 567-564-12
				</div>
			</div>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>