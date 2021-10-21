<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package http://legal-advisory/
 */

?>

<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Title</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="img/favicon.png">
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

	<!-- Styles -->
	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>
	<link rel="stylesheet" href="css/vendor.min.css">
	<link rel="stylesheet" href="css/main.min.css">
	

	<!-- Подключение svg -->
	<script src="img/svg-sprite/svg-sprite.js"></script>
	<div class="svg-placeholder" style="display: none;"></div>
	<script>document.querySelector('.svg-placeholder').innerHTML = SVG_SPRITE;</script>

</head>

<body class="is-home">

		<!-- Header -->
		<header class="header header-home" style="background: #fff url(img/bg.jpg) no-repeat center top/ cover;">

			<div class="heading">
				<ul class="social">
					<li class="social__item">
						<span>Vk</span>
						<a class="social__icon social__icon_vk" href="#">
							<svg  width="21" height="18">
								<use xlink:href="#vk"/>
							</svg>
						</a>
					</li>
					<li class="social__item">
						<span>Fb</span>
						<a class="social__icon social__icon_fb" href="#">
							<svg  width="14" height="17">
								<use xlink:href="#facebook"/>
							</svg>
						</a>
					</li>
					<li class="social__item">
						<span>Tw</span>
						<a class="social__icon social__icon_tw" href="#">
							<svg  width="18" height="15">
								<use xlink:href="#twitter"/>
							</svg>
						</a>
					</li>
					<li class="social__item">
						<a class="social__icon social__icon_inst" href="#">
							<svg   width="16" height="16">
								<use xlink:href="#instagram"/>
							</svg>
						</a>
					</li>
				</ul>
				<div class="heading__block">
					<a href="cart.html" class="heading__bag">
						<svg width="17" height="20">
							<use xlink:href="#bag"/>
						</svg>
					</a>
					<div class="language">
						<ul>
							<li class="lang-item active">
								<a href="#">Ru</a>
							</li>
							<li class="lang-item">
								<a href="#">En</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="control">
					<a href="#enter" class="control__enter popup-link-1">
						<svg class="control__icon" width="19" height="17">
							<use xlink:href="#login"/>
						</svg>
						Вход
					</a>
					<a style="display: none;" href="cabinet.html" class="control__enter control__enter_cab">
						<svg class="control__icon" width="16" height="16">
							<use xlink:href="#user"/>
						</svg>
						Личный кабинет
					</a>
					<a href="#reg" class="control__reg noise popup-link-2">Регистрация</a>
				</div>
			</div>

			<div class="navigation">
				<div class="logo noise">
					<p class="logo__icon">JC</p>
					<p class="logo__desc">legal Advisory Services</p>
				</div>

				<div class="navigation__wrap">
					<a href="#call" class="call popup-link-1">
						<div class="call__icon btn">
							<svg width="22" height="22">
								<use xlink:href="#phone-solid"/>
							</svg>
						</div>
						<div class="call__block">
							<p class="call__text">Заказать звонок</p>
							<p class="call__number">+ 7 (495) 567-28-15</p>
						</div>
					</a>
					
					<!-- Main menu -->
					<nav id="nav-wrap" class="menu">
						
						<a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
						<a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

						<ul id="nav" class="menu__list">
							<li class="active"><a href="index.html">Главная</a></li>
							<li><a href="about.html">О компании</a></li>
							<li><span><a href="services.html">Услуги</a></span>
								<ul>
									<li><a href="service.html">Корпоративная практика, M&A</a></li>
									<li><a href="service.html">Интеллектуальная собственность</a></li>
									<li><a href="service.html">Интернет-бизнес и цифровая экономика</a></li>
									<li><a href="service.html">Информационные технологии / TMT</a></li>
									<li><a href="service.html">Government Relations</a></li>
									<li><a href="service.html">Коммерческая практика</a></li>
								</ul>
							</li>
							<li><a href="reviews.html">Отзывы</a></li>
							<li><a href="contacts.html#">Контакты</a></li>
							<li><a href="market.html">Магазин</a></li>
						</ul>
					</nav><!-- End main menu -->
					
					<div class="widget widget_search">
						<form role="search" method="get" id="searchform" action="#">
					
							<input class="text-search" type="search" value="" placeholder="Поиск">
							<input type="submit" class="submit-search" value="" />
					
						</form>
					</div>
				</div>

			</div>
			<div class="offer">
				<div class="wrapper">
					<div class="offer__slider">
						<div class="offer__slide">
							<p class="offer__text">Вы хотите изменить мир.</p>
							<h1 class="offer__title">Мы хотим вам помочь.</h1>
							<p class="offer__descr">Мы современная Юридическая фирма,<br> помогающая перспективным стартапам, фрилансерам и малому бизнесу.</p>
							<a href=contacts.html#callback" class="offer__btn btn popup-link">Бесплатная консультация</a>
						</div>
						<div class="offer__slide">
							<p class="offer__text">Вы хотите изменить мир.</p>
							<h1 class="offer__title">Мы хотим вам помочь.</h1>
							<p class="offer__descr">Юристы JC проведут вас и вашу компанию через многочисленные юридические проблемы, стоящие перед компаниями Москвы сегодня.</p>
							<a href="contacts.html#callback" class="offer__btn btn popup-link">Бесплатная консультация</a>
						</div>
						<div class="offer__slide">
							<p class="offer__text">Вы хотите изменить мир.</p>
							<h1 class="offer__title">Мы хотим вам помочь.</h1>
							<p class="offer__descr">Мы предпочитаем обсуждать проблемы и решения, а не участвовать в теоретических юридических дебатах, которые никогда не заканчиваются.</p>
							<a href="contacts.html#callback" class="offer__btn btn">Бесплатная консультация</a>
						</div>
					</div>

					<a class="offer__video popup-with-zoom-anim popup-youtube" href="https://www.youtube.com/watch?v=FWxRRbnwRf0" rel="nofollow" >
						<p class="offer__time">1:30</p>
						<div class="offer__play"></div>
						<p class="offer__watch">Посмотрите короткое видео о нашей компании</p>
					</a>
				</div>
			</div>
			
		</header><!-- End header -->

		<!-- Help -->
		<section class="help">
			<div class="wrapper">
				<div class="help__block">
					<h2 class="help__title secondary-title"><span>Кому мы</span> помогаем</h2>
					<p class="help__descr">Мы фокусируемся на юридических вопросах, актуальных для успешного современного бизнеса</p>
					<a href="contacts.html#callback" class="help__btn btn popup-link">Получить консультацию</a>
				</div>
				<ul class="help__list">
					<li class="help__item">
						<div class="help__icon help__icon_rocket"></div>
						<h4 class="help__heading">Стартапам</h4>
						<p class="help__par">Когда вы будете готовы вывести свой стартап на новый уровень, мы можем оказать вам юридические&nbsp;услуги, чтобы<br>помочь вам расти</p>
					</li>
					<li class="help__item">
						<div class="help__icon help__icon_monitor"></div>
						<h4 class="help__heading">Фрилансеру</h4>
						<p class="help__par">Начать независимый бизнес проще, чем когда-либо. Неважно подрабатываете вы или работаете самостоятельно, мы можем помочь вам сделать все правильно</p>
					</li>
					<li class="help__item">
						<div class="help__icon help__icon_brain"></div>
						<h4 class="help__heading">Малому бизнесу</h4>
						<p class="help__par">Мы поможем направить ваш бизнес в правильном направлении. Окажем услуги в области договорного, трудового права, недвижимости и многое другое </p>
					</li>
				</ul>
			</div>
		</section><!-- End help -->

		<!-- Choice -->
		<section class="choice">
			<div class="wrapper">
				<div class="choice__wrap">
					<h2 class="choice__title secondary-title"><span>Почему мы –</span><br>правильный выбор для вас</h2>
					<div class="choice__descr">
						<p>JC - это юридическая фирма с полным спектром услуг, специализирующаяся на стартапах, фрилансерах и малом бизнесе.</p>
						<p>Мы придерживаемся принципа, что первоклассный юрисконсульт должен быть доступен для компаний всех размеров, у нас инновационный подход к традиционной культуре юридической фирмы.</p>
						<p>Будь то новое бизнес-предприятие, инвестиционный раунд, стратегическое партнерство или сложный корпоративный спор, <span>мы здесь, чтобы помочь вам построить и поддержать свою мечту.</span></p>
					</div>
					<a href="about.html" class="choice__btn noise">
						Читать больше о компании
						<svg width="18" height="20">
							<use xlink:href="#nav-right"/>
						</svg>
					</a>
				</div>
			</div>
		</section><!-- End choice -->

		<!-- Connect -->
		<section class="connect">
			<div class="connect__decor"></div>
			<div class="wrapper">
				<div class="connect__wrap">
					<h3 class="connect__title">Свяжитесь с нами, чтобы узнать, как&nbsp;мы можем помочь вашему бизнесу</h3>
					<a href="contacts.html#callback" class="connect__btn btn-white popup-link">Связаться с нами</a>
				</div>
				<div class="connect__img"></div>
			</div>
		</section><!-- End connect -->

		<!-- Cases -->
		<section class="cases tabs">
			<div class="wrapper">
				<h2 class="cases__title secondary-title"><span>Наши</span><br>кейсы</h2>
				<div class="tabs__wrap">

					<p class="tabs__descr">Кейсы – это описание конкретной ситуации или случая в определённой сфере юридической практики. Вы можете ознакомиться с конкретными ситуациями, с которыми сталкивались юристы компании JC</p>
					<!-- Cases titles -->
					<ul class="tabs__caption">
						<li class="active">Стартапы</li>
						<li>Фриланс</li>
						<li>Малый бизнес</li>
					</ul>

				</div>

				<!-- Cases content one-->
				<div class="tabs__content active">
					<div class="cases__item">
						<div class="cases__block">
							<h3 class="cases__heading">Взыскание задолженности с дебитора</h3>
							<a href="case.html" class="cases__link link-more">
								Читать больше
								<svg width="18" height="20">
									<use xlink:href="#nav-right"/>
								</svg>
							</a>
						</div>
						<div class="cases__img">
							<img src="img/case1.jpg" alt="Изображение">
						</div>
					</div>
					<div class="cases__item">
						<div class="cases__block">
							<h3 class="cases__heading">Вывод денег через текущие платежи</h3>
							<a href="case.html" class="cases__link link-more">
								Читать больше
								<svg width="18" height="20">
									<use xlink:href="#nav-right"/>
								</svg>
							</a>
						</div>
						<div class="cases__img">
							<img src="img/case2.jpg" alt="Изображение">
						</div>
					</div>
					<div class="cases__item">
						<div class="cases__block">
							<h3 class="cases__heading">Урегулирование налогового спора</h3>
							<a href="case.html" class="cases__link link-more">
								Читать больше
								<svg width="18" height="20">
									<use xlink:href="#nav-right"/>
								</svg>
							</a>
						</div>
						<div class="cases__img">
							<img src="img/case3.jpg" alt="Изображение">
						</div>
					</div>
					<div class="cases__item">
						<div class="cases__block">
							<h3 class="cases__heading">Представление интересов компании PPD</h3>
							<a href="case.html" class="cases__link link-more">
								Читать больше
								<svg width="18" height="20">
									<use xlink:href="#nav-right"/>
								</svg>
							</a>
						</div>
						<div class="cases__img">
							<img src="img/case4.jpg" alt="Изображение">
						</div>
					</div>
				</div><!-- End cases content one-->

				<div class="tabs__content">
					<div class="cases__item">
						<div class="cases__block">
							<h3 class="cases__heading">Представление интересов компании PPD</h3>
							<a href="#" class="cases__link link-more">
								Читать больше
								<svg width="18" height="20">
									<use xlink:href="#nav-right"/>
								</svg>
							</a>
						</div>
						<div class="cases__img">
							<img src="img/case4.jpg" alt="Изображение">
						</div>
					</div>
					<div class="cases__item">
						<div class="cases__block">
							<h3 class="cases__heading">Вывод денег через текущие платежи</h3>
							<a href="#" class="cases__link link-more">
								Читать больше
								<svg width="18" height="20">
									<use xlink:href="#nav-right"/>
								</svg>
							</a>
						</div>
						<div class="cases__img">
							<img src="img/case2.jpg" alt="Изображение">
						</div>
					</div>
					<div class="cases__item">
						<div class="cases__block">
							<h3 class="cases__heading">Взыскание задолженности с дебитора</h3>
							<a href="#" class="cases__link link-more">
								Читать больше
								<svg width="18" height="20">
									<use xlink:href="#nav-right"/>
								</svg>
							</a>
						</div>
						<div class="cases__img">
							<img src="img/case1.jpg" alt="Изображение">
						</div>
					</div>
					<div class="cases__item">
						<div class="cases__block">
							<h3 class="cases__heading">Урегулирование налогового спора</h3>
							<a href="#" class="cases__link link-more">
								Читать больше
								<svg width="18" height="20">
									<use xlink:href="#nav-right"/>
								</svg>
							</a>
						</div>
						<div class="cases__img">
							<img src="img/case3.jpg" alt="Изображение">
						</div>
					</div>
				</div>

				<div class="tabs__content">
					<div class="cases__item">
						<div class="cases__block">
							<h3 class="cases__heading">Вывод денег через текущие платежи</h3>
							<a href="#" class="cases__link link-more">
								Читать больше
								<svg width="18" height="20">
									<use xlink:href="#nav-right"/>
								</svg>
							</a>
						</div>
						<div class="cases__img">
							<img src="img/case2.jpg" alt="Изображение">
						</div>
					</div>
					<div class="cases__item">
						<div class="cases__block">
							<h3 class="cases__heading">Взыскание задолженности с дебитора</h3>
							<a href="#" class="cases__link link-more">
								Читать больше
								<svg width="18" height="20">
									<use xlink:href="#nav-right"/>
								</svg>
							</a>
						</div>
						<div class="cases__img">
							<img src="img/case1.jpg" alt="Изображение">
						</div>
					</div>
					<div class="cases__item">
						<div class="cases__block">
							<h3 class="cases__heading">Представление интересов компании PPD</h3>
							<a href="#" class="cases__link link-more">
								Читать больше
								<svg width="18" height="20">
									<use xlink:href="#nav-right"/>
								</svg>
							</a>
						</div>
						<div class="cases__img">
							<img src="img/case4.jpg" alt="Изображение">
						</div>
					</div>
					<div class="cases__item">
						<div class="cases__block">
							<h3 class="cases__heading">Урегулирование налогового спора</h3>
							<a href="#" class="cases__link link-more">
								Читать больше
								<svg width="18" height="20">
									<use xlink:href="#nav-right"/>
								</svg>
							</a>
						</div>
						<div class="cases__img">
							<img src="img/case3.jpg" alt="Изображение">
						</div>
					</div>
				</div>

				<a href="#" class="cases__more link-more">
					Показать больше кейсов
					<svg width="18" height="20">
						<use xlink:href="#nav-right"/>
					</svg>
				</a>

			</div>

		</section><!-- End cases -->
		
<!-- Clients -->
		<section class="clients">
			<div class="wrapper">
				<h2 class="clients__title secondary-title"><span>За нас говорят</span><br>наши клиенты</h2>
				<div class="сlients__slider">
					<div class="clients__slide">
						<div class="clients__box">
							<div class="clients__photo">
								<div class="clients__img">
									<img src="img/client1.jpg" alt="Анна Свиридова">
								</div>
								<a href="#" class="clients__link">
									<svg  width="14" height="17">
										<use xlink:href="#facebook"/>
									</svg>
								</a>
							</div>
							<div class="clients__say">
								<p class="clients__name">Анна Свиридова</p>
								<div class="clients__text">
									Наша компания ведет свою деятельность в сфере ИТ-бизнеса, которая на сегодняшний день является специфической областью для правового регулирования. И, несмотря на это, в процессе сотрудничества с нами работники юридической компании JC показали высокий уровень профессионализма и способность оперативно решать любые поставленные задачи.</p>
									<p>Нашей организации был предоставлен обширный перечень юридических услуг, таких как устные и письменные консультации; экспертиза документов и деятельности нашей компании; представление наших интересов перед контрагентами; составление различных юридических документов и т.д. Данные услуги были оказаны своевременно и качественно. </p>
								</div>
							</div>
							<div class="add-time">
								<svg width="13" height="13">
									<use xlink:href="#time"/>
								</svg>
								<p class="add-time__date">20.05.2018</p>
							</div>
						</div>
					</div>
					<div class="clients__slide">
						<div class="clients__box">
							<div class="clients__photo">
								<div class="clients__img">
									<img src="img/client2.jpg" alt="Екатерина Цыпелева">
								</div>
								<a href="#" class="clients__link">
									<svg  width="14" height="17">
										<use xlink:href="#facebook"/>
									</svg>
								</a>
							</div>
							<div class="clients__say">
								<p class="clients__name">Екатерина Цыпелева</p>
								<div class="clients__text">
									<p>Наша компания ведет свою деятельность в сфере ИТ-бизнеса, которая на сегодняшний день является специфической областью для правового регулирования. И, несмотря на это, в процессе сотрудничества с нами работники юридической компании JC показали высокий уровень профессионализма и способность оперативно решать любые поставленные задачи.</p>
								</div>
							</div>
							<div class="add-time">
								<svg width="13" height="13">
									<use xlink:href="#time"/>
								</svg>
								<p class="add-time__date">20.05.2018</p>
							</div>
						</div>
					</div>
					<div class="clients__slide">
						<div class="clients__box">
							<div class="clients__photo">
								<div class="clients__img">
									<img src="img/client3.jpg" alt="Наталья Иванова">
								</div>
								<a href="#" class="clients__link">
									<svg  width="14" height="17">
										<use xlink:href="#facebook"/>
									</svg>
								</a>
							</div>
							<div class="clients__say">
								<p class="clients__name">Наталья Иванова</p>
								<div class="clients__text">
									<p>Наша компания ведет свою деятельность в сфере ИТ-бизнеса, которая на сегодняшний день является специфической областью для правового регулирования. И, несмотря на это, в процессе сотрудничества с нами работники юридической компании JC показали высокий уровень профессионализма и способность оперативно решать любые поставленные задачи.</p>
									<p>Нашей организации был предоставлен обширный перечень юридических услуг, таких как устные и письменные консультации. </p>
								</div>
							</div>
							<div class="add-time">
								<svg width="13" height="13">
									<use xlink:href="#time"/>
								</svg>
								<p class="add-time__date">20.05.2018</p>
							</div>
						</div>
					</div>
					<div class="clients__slide">
						<div class="clients__box">
							<div class="clients__photo">
								<div class="clients__img">
									<img src="img/client1.jpg" alt="Анна Свиридова">
								</div>
								<a href="#" class="clients__link">
									<svg  width="14" height="17">
										<use xlink:href="#facebook"/>
									</svg>
								</a>
							</div>
							<div class="clients__say">
								<p class="clients__name">Ольга Генриховна</p>
								<div class="clients__text">
									<p>Наша компания ведет свою деятельность в сфере ИТ-бизнеса, которая на сегодняшний день является специфической областью для правового регулирования. И, несмотря на это, в процессе сотрудничества с нами работники юридической компании JC показали высокий уровень профессионализма и способность оперативно решать любые поставленные задачи.</p>
									<p>Нашей организации был предоставлен обширный перечень юридических услуг, таких как устные и письменные консультации; экспертиза документов и деятельности нашей компании; представление наших интересов перед контрагентами; составление различных юридических документов и т.д. Данные услуги были оказаны своевременно и качественно. Нашей организации был предоставлен обширный перечень юридических услуг, таких как устные и письменные консультации; экспертиза документов и деятельности нашей компании; </p>
									<p>Нашей организации был предоставлен обширный перечень юридических услуг, таких как устные и письменные консультации; экспертиза документов и деятельности нашей компании; </p>
								</div>
							</div>
							<div class="add-time">
								<svg width="13" height="13">
									<use xlink:href="#time"/>
								</svg>
								<p class="add-time__date">20.05.2018</p>
							</div>
						</div>
					</div>
					<div class="clients__slide">
						<div class="clients__box">
							<div class="clients__photo">
								<div class="clients__img">
									<img src="img/client4.jpg" alt="Анна Свиридова">
								</div>
								<a href="#" class="clients__link">
									<svg  width="14" height="17">
										<use xlink:href="#facebook"/>
									</svg>
								</a>
							</div>
							<div class="clients__say">
								<p class="clients__name">Илья Меншиков</p>
								<div class="clients__text">
									<p>Наша компания ведет свою деятельность в сфере ИТ-бизнеса, которая на сегодняшний день является специфической областью для правового регулирования. И, несмотря на это, в процессе сотрудничества с нами работники юридической компании JC показали высокий уровень профессионализма и способность оперативно решать любые поставленные задачи.</p>
									<p>Нашей организации был предоставлен обширный перечень юридических услуг, таких как устные и письменные консультации; экспертиза документов и деятельности нашей компании; представление наших интересов перед контрагентами; составление различных юридических документов и т.д. Данные услуги были оказаны своевременно и качественно. </p>
								</div>
							</div>
							<div class="add-time">
								<svg width="13" height="13">
									<use xlink:href="#time"/>
								</svg>
								<p class="add-time__date">20.05.2018</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- End clients -->

		<!-- Services -->
		<section class="services">
			<div class="wrapper">
				<div class="services__wrap">
					<h2 class="services__title secondary-title"><span>Наши</span><br>услуги</h2>
					<a href="services.html" class="services__btn btn">Все услуги</a>
				</div>
				<ul class="services__list">
					<li class="services__item services__item_stat">
						<h3 class="services__heading">Корпоративная практика, M&A</h3>
						<p class="services__descr">Услуги в области корпоративного управления, рынков капитала, M&A</p>
						<p class="services__price">$350</p>
						<a href="service.html" class="services__order btn">Подробнее</a>
						<div class="services__bg services__bg_stat"></div>
					</li>
					<li class="services__item services__item_idea">
						<h3 class="services__heading">Интеллектуальная собственность</h3>
						<p class="services__descr">Весь спектр услуг в сфере интеллектуальной собственности</p>
						<p class="services__price">$390</p>
						<a href="service.html" class="services__order btn">Подробнее</a>
						<div class="services__bg services__bg_idea"></div>
					</li>
					<li class="services__item services__item_internet">
						<h3 class="services__heading">Интернет-бизнес и цифровая экономика</h3>
						<p class="services__descr">Весь спектр юридических услуг по сопровождению интернет – проектов</p>
						<p class="services__price">$480</p>
						<a href="service.html" class="services__order btn">Подробнее</a>
						<div class="services__bg services__bg_internet"></div>
					</li>
				</ul>
			</div>
		</section><!-- End services -->

		<!-- News -->
		<section class="news">
			<div class="wrapper">
				<h2 class="news__title secondary-title"><span>Актуальные</span><br>новости</h2>

				<div class="news__slider">
						<div class="news__slide">
							<div class="news__item">
								<div class="add-time">
									<svg width="13" height="13">
										<use xlink:href="#time"/>
									</svg>
									<p class="add-time__date">20.05.2018</p>
								</div>
								<h5 class="news__heading">Лучшие юридические компании Москвы</h5>
								<p class="news__text">Лучшие юридические компании Москвы зарабатывают свою репутацию годами. Многие из них существуют более 20 лет, а это серьёзный срок для любой организации.</p>
								<a href="new-single.html" class="news__link link-more">
									Читать больше
									<svg width="18" height="20">
										<use xlink:href="#nav-right"/>
									</svg>
								</a>
							</div>
							<div class="news__img blue-noise">
								<img src="img/photo1.jpg" alt="Изображение">
							</div>
						</div>
						<div class="news__slide">
							<div class="news__item">
								<div class="add-time">
									<svg width="13" height="13">
										<use xlink:href="#time"/>
									</svg>
									<p class="add-time__date">20.05.2018</p>
								</div>
								<h5 class="news__heading">Что разрешено коллекторам по закону?</h5>
								<p class="news__text">1 января этого года вступил в силу новый Федеральный закон №230-ФЗ защищающий права физических лиц при возврате задолженности, которая просрочена...</p>
								<a href="#" class="news__link link-more">
									Читать больше
									<svg width="18" height="20">
										<use xlink:href="#nav-right"/>
									</svg>
								</a>
							</div>
							<div class="news__img blue-noise">
								<img src="img/photo2.jpg" alt="Изображение">
							</div>
						</div>
						<div class="news__slide">
							<div class="news__item">
								<div class="add-time">
									<svg width="13" height="13">
										<use xlink:href="#time"/>
									</svg>
									<p class="add-time__date">20.05.2018</p>
								</div>
								<h5 class="news__heading">Как выбрать юридическую фирму</h5>
								<p class="news__text">Как выбрать юридическую компанию, которая решит ваши проблемы, а не добавит новых? – вопрос очень популярный в нашей стране...</p>
								<a href="new-single.html" class="news__link link-more">
									Читать больше
									<svg width="18" height="20">
										<use xlink:href="#nav-right"/>
									</svg>
								</a>
							</div>
							<div class="news__img blue-noise">
								<img src="img/photo3.jpg" alt="Изображение">
							</div>
						</div>
						<div class="news__slide">
							<div class="news__item">
								<div class="add-time">
									<svg width="13" height="13">
										<use xlink:href="#time"/>
									</svg>
									<p class="add-time__date">20.05.2018</p>
								</div>
								<h5 class="news__heading">Лучшие юридические компании Москвы</h5>
								<p class="news__text">Лучшие юридические компании Москвы зарабатывают свою репутацию годами. Многие из них существуют более 20 лет, а это серьёзный срок для любой организации.</p>
								<a href="new-single.html" class="news__link link-more">
									Читать больше
									<svg width="18" height="20">
										<use xlink:href="#nav-right"/>
									</svg>
								</a>
							</div>
							<div class="news__img blue-noise">
								<img src="img/photo1.jpg" alt="Изображение">
							</div>
						</div>
					</div>

					<a href="news.html" class="news__btn btn">Все новости</a>
				</div>
		</section><!-- End news -->

		<!-- Footer -->
		<footer class="footer">
			<div class="wrapper">
				<div class="footer__block">
					<a href="index.html" class="logo noise">
						<p class="logo__icon">JC</p>
						<p class="logo__desc">legal Advisory Services</p>
					</a>
					<ul class="social">
						<li class="social__item">
							<span>Vk</span>
							<a class="social__icon social__icon_vk" href="#">
								<svg  width="21" height="18">
									<use xlink:href="#vk"/>
								</svg>
							</a>
						</li>
						<li class="social__item">
							<span>Fb</span>
							<a class="social__icon social__icon_fb" href="#">
								<svg  width="14" height="17">
									<use xlink:href="#facebook"/>
								</svg>
							</a>
						</li>
						<li class="social__item">
							<span>Tw</span>
							<a class="social__icon social__icon_tw" href="#">
								<svg  width="18" height="15">
									<use xlink:href="#twitter"/>
								</svg>
							</a>
						</li>
						<li class="social__item">
							<a class="social__icon social__icon_inst" href="#">
								<svg width="16" height="16">
									<use xlink:href="#instagram"/>
								</svg>
							</a>
						</li>
					</ul>
					<p class="footer__special">Разработано специально для коучинга WAYUP</p>
				</div>
				<nav class="guide">
					<p class="guide__title">Карта сайта</p>
					<ul>
						<li class="active"><a href="#">Главная</a></li>
						<li><a href="index.html">О компании</a></li>
						<li><a href="cases.html">Кейсы</a></li>
						<li><a href="reviews.html">Отзывы</a></li>
						<li><a href="news.html">Новости</a></li>
					</ul>
				</nav>
				<div class="serv">
					<p class="serv__title">Услуги</p>
					<ul>
						<li><a href="service.html">Корпоративная практика, M&A</a></li>
						<li><a href="service.html">Информационные технологии / TMT</a></li>
						<li><a href="service.html">Интеллектуальная собственность</a></li>
						<li><a href="service.html">Government <br>Relations</a></li>
						<li><a href="service.html">Интернет-бизнес и цифровая экономика</a></li>
						<li><a href="#">Коммерческая практика</a></li>
					</ul>
				</div>
				<div class="contact">
					<p class="contact__title">Контакты</p>
					<ul class="contact__list">
						<li class="contact__item">
							<svg width="20" height="25">
								<use xlink:href="#pin"/>
							</svg>
							<p class="contact__text contact__text_address">г. Москва, ул. Бутырская, 62
				Z-Plaza, 5-й этаж</p>
						</li>
						<li class="contact__item">
							<svg width="21" height="21">
								<use xlink:href="#phone"/>
							</svg>
							<div class="contact__phones">
								<a href="#" class="contact__text contact__text_phone">+ 7 (495) 577-18-11</a>
								<a href="#" class="contact__text contact__text_phone">+ 7 (495) 567-28-15</a>
							</div>
						</li>
						<li class="contact__item">
							<svg width="25" height="19">
								<use xlink:href="#mail"/>
							</svg>
							<p class="contact__text contact__text_mail">JClegal@gmail.com</p>
						</li>
					</ul>
				</div>
				<div class="subscribe">
					<p class="subscribe__title">Подписаться на рассылку новостей</p>
					<form action="#" class="subscribe__form" id="popupSubscribe">
						<input type="text" name="email" class="subscribe__input" placeholder="Ваш email">
						<button class="subscribe__btn btn" data-submit>Подписаться</button>
					</form>
					<div class="control">
						<div class="language">
							<ul>
								<li class="lang-item active">
									<a href="#">Ru</a>
								</li>
								<li class="lang-item">
									<a href="#">En</a>
								</li>
							</ul>
						</div>
						<div class="control__wrap">
							<a  href="#enter" class="control__enter popup-link-1">
								<svg class="control__icon" width="19" height="17">
									<use xlink:href="#login"/>
								</svg>
								Вход
							</a>
							<a style="display: none;" href="cabinet.html" class="control__enter control__enter_cab">
								<svg class="control__icon" width="16" height="16">
									<use xlink:href="#user"/>
								</svg>
								Личный кабинет
							</a>
							<a href="#reg" class="control__reg noise popup-link-2">Регистрация</a>
						</div>
					</div>
				</div>
				<p class="footer__copy">©2007-2018 Все права защищены</p>
			</div>
		</footer><!-- End footer -->


<!-- MODAL WINDOWS-->

<!-- Call me -->
		<div id="call" class="callme mfp-hide">
			<h4 class="login__title modal-title">Отправьте заявку</h4>
			<p class="login__question modal-text">И наши специалисты свяжутся с вами!</p>
			<form action="#" id="popupOrder" class="log callme-form">

				<div class="log__group">
					<label>Имя</label>
					<input type="text" name="name_mod" class="log__input">
				</div>

				<div class="log__group show-pass">
					<label>Телефон</label>
					<input type="tel" name="tel" class="log__input">
				</div>

				<div class="log__btn">
					<input id="send" type="submit" data-submit value="Отправить" class="btn"/>
				</div>
			</form>
		</div>

<!-- Login -->
		<div id="enter" class="login mfp-hide">
			<h4 class="login__title modal-title">Войдите в свой аккаунт</h4>
			<p class="login__question modal-text">Еще нет учетной записи? <span><a href="#reg" class="popup-link-2 link-more">Зарегистрируйтесь сейчас</a></span>, это займет не более минуты</p>
			<form action="#" id="log" class="log">

				<span class="modal-сaution">Такого аккаунта не существует</span>
				<span class="modal-сaution">Неверный E-mail или пароль</span>

				<div class="log__group">
					<label>Email</label>
					<input type="email" name="email_mod" class="log__input">
				</div>

				<div class="log__group show-pass">
					<label>Пароль</label>
					<input id="password" type="password" name="password_mod" class="log__input">
					<span class="log__eye password-eye" data-target="#password">
						<svg width="34" height="22">
							<use xlink:href="#eye"/>
						</svg>
					</span>
				</div>
				<div class="log__wrap">
					<div class="log__group check">
						<input id="check" type="checkbox" name="remember" value="remember">
						<label for="check">Запомнить пароль</label>
					</div>
					<a href="#recovery" class="popup-link-1 log__forget">Забыли пароль?</a>
				</div>
				<div class="log__btn">
					<input id="entry" type="submit" data-submit value="Войти" class="btn"/>
				</div>
			</form>
			<div class="var">
				<p class="var__text">Или войдите в систему с помощью</p>
				<ul class="var__list">
					<li>
						<a href="#" class="var__link var__link_goo">
							<svg width="14" height="14">
								<use xlink:href="#google"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="#" class="var__link var__link_vk">
							<svg width="18" height="18">
								<use xlink:href="#vk"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="#" class="var__link var__link_fb">
							<svg width="16" height="16">
								<use xlink:href="#facebook"/>
							</svg>
						</a>
					</li>
				</ul>
			</div>
		</div>

<!-- Forget password -->
		<div id="recovery" class="recovery mfp-hide">
			<div class="forget">
				<p class="forget__title modal-subtitle">Забыли пароль?</p>
				<p class="forget__text modal-text">Введите ваш Email. Вам будет выслан проверочный код. После получения кода подтверждения вы сможете выбрать новый пароль для своей учетной записи.</p>
				<form action="#" id="recover" class="log">
				
					<span class="modal-сaution">Пароль был отправлен на ваш Email</span>
					<span class="modal-сaution">Пользователя с таким Email не существует</span>
				
					<div class="log__group">
						<label>Email</label>
						<input type="email" name="email_mod" class="log__input">
					</div>
					<div class="log__btn">
						<input id="pass" type="submit" data-submit value="Отправить пароль" class="btn"/>
					</div>
				</form>
				<a href="#enter" class="popup-link-1 link-more">
					<svg width="18" height="20">
						<use xlink:href="#nav-right"/>
					</svg>
					Назад
				</a>
			</div>
<!---------------------- Сonfirmation code ---------------------->
			<div class="confirm">
				<p class="confirm__title  modal-subtitle">Введите код подтверждения</p>

				<form action="#" id="key" class="log">

					<span class="modal-сaution">Неверный код</span>

					<div class="log__group">
						<label>Код подтверждения</label>
						<input type="text" name="confirm" class="log__input">
					</div>
					<div class="log__btn">
						<input id="confirm" type="submit" data-submit value="Подтвердить" class="btn"/>
					</div>
				</form>
				<a href="#enter" class="popup-link-1 link-more">
					<svg width="18" height="20">
						<use xlink:href="#nav-right"/>
					</svg>
					Назад
				</a>
			</div>

<!---------------------- New password ---------------------->
			<div class="new-pass">
				<p class="new-pass__title  modal-subtitle">Придумайте новый пароль</p>
				<p class="new-pass__text modal-text">Пароль должен содержать не менее 9 символов</p>

				<form action="#" id="create" class="log">

					<span class="modal-сaution">Вы успешно сменили пароль</span>

					<div class="log__group show-pass">
						<label>Новый пароль</label>
						<input id="new-pass" type="password" name="password_mod" class="log__input">
						<span class="log__eye password-eye" data-target="#new-pass">
							<svg width="34" height="22">
								<use xlink:href="#eye"/>
							</svg>
						</span>
					</div>
					<div class="log__group show-pass">
						<label>Подтвердите пароль</label>
						<input id="confirm-pass" type="password" name="password_mod" class="log__input">
						<span class="log__eye password-eye" data-target="#confirm-pass">
							<svg width="34" height="22">
								<use xlink:href="#eye"/>
							</svg>
						</span>
					</div>
					<div class="log__wrap">
						<div class="log__btn">
							<input type="submit" id="conf" data-submit value="Подтвердить" class="btn"/>
						</div>
						<a href="#enter" class="popup-link-1 log__enter">Войти</a>
					</div>
				</form>
				<a href="#enter" class="popup-link-1 link-more">
					<svg width="18" height="20">
						<use xlink:href="#nav-right"/>
					</svg>
					Назад
				</a>
			</div>

		</div>

<!-- Registration -->
		<div id="reg" class="reg mfp-hide">
			<h4 class="reg__title modal-title">Регистрация нового аккаунта</h4>
			<p class="reg__question modal-text">Уже есть аккаунт? <span><a href="#enter" class="popup-link-1 link-more">Войдите</a></span></p>
			
			<form action="#" id="regist" class="log">

				<span class="modal-сaution">Пароль должен содержать не менее 9 символов</span>
				<span class="modal-сaution">Пользователь с таким адресом электронной почты уже существует</span>

				<div class="log__group">
					<label>Имя</label>
					<input type="text" name="name_mod" class="log__input">
				</div>
				<div class="log__group">
					<label>Email</label>
					<input type="email" name="email_mod" class="log__input">
				</div>
				<div class="log__group">
					<label>Телефон</label>
					<input type="tel" name="tel_mod" class="log__input">
				</div>
				<div class="log__group show-pass">
					<label>Пароль</label>
					<input id="reg-pass" type="password" name="password_mod" class="log__input">
					<span class="log__eye password-eye" data-target="#reg-pass">
						<svg width="34" height="22">
							<use xlink:href="#eye"/>
						</svg>
					</span>
				</div>
				<div class="log__wrap">
					
					<div class="log__btn">
						<input id="do-reg" type="submit" data-submit value="Зарегистрироваться" class="btn"/>
					</div>
					<div class="log__group check">
						<input id="rem" type="checkbox" name="remember" value="remember">
						<label for="rem">Запомнить пароль</label>
					</div>
				</div>
			</form>
			<div class="var">
				<p class="var__text">Или войдите в систему с помощью</p>
				<ul class="var__list">
					<li>
						<a href="#" class="var__link var__link_goo">
							<svg width="14" height="14">
								<use xlink:href="#google"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="#" class="var__link var__link_vk">
							<svg width="18" height="18">
								<use xlink:href="#vk"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="#" class="var__link var__link_fb">
							<svg width="16" height="16">
								<use xlink:href="#facebook"/>
							</svg>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<!-- Subscribe news -->
		<div id="sub" class="sub mfp-hide">
			<p class="sub__thank">Спасибо!</p>
			<p class="sub__text">Вы успешно подписались на нашу новостную рассылку</p>
		</div>

		<!-- Order -->
		<div id="taken" class="sub mfp-hide">
			<p class="sub__thank">Спасибо!</p>
			<p class="sub__text">Ваша заявка принята. Наши специалисты свяжутся с вами в ближайшее время.</p>
		</div>

		<!-- Message -->
		<div id="callback" class="sub mfp-hide">
			<p class="sub__thank">Спасибо за отзыв!</p>
			<p class="sub__text">Ваше мнение очень важно для нас. Спасибо, что уделили нам время</p>
		</div>

<!-- End modal -->


<!-- Loader for form -->
		<div id="form-loader">
			<img src="img/eclipse.svg">
		</div>


<!-- Javascript -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/goodshare.js@4/goodshare.min.js"></script>

	<script src="js/vendor.min.js"></script>
	<script src="js/common.min.js"></script>


</body>
</html>