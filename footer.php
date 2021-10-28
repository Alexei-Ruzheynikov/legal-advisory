<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package legal-advisory
 */

?>
<?php global $legal_advisory; ?>
	<!-- Footer -->
		<footer class="footer">
			<div class="wrapper">
				<div class="footer__block">
					<a href="index.html" class="logo noise">
						<p class="logo__icon"><?php bloginfo('name'); ?></p>
						<p class="logo__desc"><?php bloginfo('description'); ?></p>
					</a>
					<ul class="social">
						<?php $social_links = $legal_advisory['social_links'];
					foreach ($social_links as $social=>$link){
						$label = '';
						$svg = '';
						$class = '';
						
						if($social == 'Vkontakte Link'){
							$label = '<span>Vk</span>';
							$svg = '<svg  width="21" height="18">
								<use xlink:href="#vk"/>
							</svg>';
							$class = 'social__icon_vk';
						} else if ($social == 'Facebook Link'){
							$label = '<span>Fb</span>';
							$svg = '<svg  width="14" height="17">
								<use xlink:href="#facebook"/>
							</svg>';
							$class = 'social__icon_fb';
						} else if ($social == 'Twitter Link'){
							$label = '<span>Tw</span>';
							$svg = '<svg  width="18" height="15">
								<use xlink:href="#twitter"/>
							</svg>';
							$class = 'social__icon_tw';
						} else if ($social == 'Instagram Link'){
							$label = '';
							$svg = '<svg   width="16" height="16">
								<use xlink:href="#instagram"/>
							</svg>';
							$class = 'social__icon_inst';
						}
						?>
						<?php if($link){ ?>
							<li class="social__item">
								<?php echo $label; ?>
								<a class="social__icon <?php echo $class; ?>" target="_blank" href="<?php echo $link; ?>">
								<?php echo $svg; ?>
								</a>
							</li>
							<?php } ?>
							<?php } ?>

						<!-- <li class="social__item">
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
						</li> -->
					</ul>
					<?php if($legal_advisory['footer_info']){ ?>
					<p class="footer__special"><?php echo $legal_advisory['footer_info']; ?></p>
					<?php } ?>
				</div>
				<nav class="guide">
					<?php if($legal_advisory['footer_section1']){ ?>
					<p class="guide__title"><?php echo $legal_advisory['footer_section1']; ?></p>
					<?php } ?>

					<?php 
					wp_nav_menu( array(
						'theme_location' => 'menu-footer-1',
						'menu_id' => 'footer-navigation-one',
						'menu_class' => '',
						'container' => '',
					));
					?>

					<!-- <ul>
						<li class="active"><a href="#">Главная</a></li>
						<li><a href="index.html">О компании</a></li>
						<li><a href="cases.html">Кейсы</a></li>
						<li><a href="reviews.html">Отзывы</a></li>
						<li><a href="news.html">Новости</a></li>
					</ul> -->
				</nav>
				<div class="serv">
					<?php if($legal_advisory['footer_section2']){ ?>
					<p class="serv__title"><?php echo $legal_advisory['footer_section2'] ?></p>
					<?php } ?>
					<?php 
					wp_nav_menu( array(
						'theme_location' => 'menu-footer-2',
						'menu_id' => 'footer-navigation-two',
						'menu_class' => '',
						'container' => '',
					));
					?>
				</div>
				<div class="contact">
					<?php if($legal_advisory['footer_section3']){ ?>
					<p class="contact__title"><?php echo $legal_advisory['footer_section3']; ?></p>
					<?php } ?>
					<ul class="contact__list">
						<li class="contact__item">
							<svg width="20" height="25">
								<use xlink:href="#pin"/>
							</svg>
							<p class="contact__text contact__text_address"><?php echo $legal_advisory['footer_address']; ?></p>
						</li>
						<li class="contact__item">
							<svg width="21" height="21">
								<use xlink:href="#phone"/>
							</svg>
							<div class="contact__phones">
								<?php 
								foreach($legal_advisory['footer_phone'] as $phone){
									if($phone){ ?>
								<a href="tel:<?php echo esc_attr($phone); ?>" class="contact__text contact__text_phone"><?php echo esc_attr($phone); ?></a>
								<?php } } ?>
							</div>
						</li>
						<li class="contact__item">
							<svg width="25" height="19">
								<use xlink:href="#mail"/>
							</svg>
							<p class="contact__text contact__text_mail"><?php echo $legal_advisory['footer_email']; ?></p>
						</li>
					</ul>
				</div>
				<div class="subscribe">
					<!-- <p class="subscribe__title"><?php echo $legal_advisory['footer_section4']; ?></p>
					<?php echo do_shortcode($legal_advisory['footer_subscribeshortcode']); ?> -->
					<!-- <div class="control">
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
				</div> -->
				<p class="footer__copy"><?php echo $legal_advisory['footer_copyrights']; ?></p>
			</div>
		</footer><!-- End footer -->


<!-- MODAL WINDOWS-->

<?php get_template_part('template-parts/popup_contact'); ?>

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
	<!-- <script src="https://cdn.jsdelivr.net/npm/goodshare.js@4/goodshare.min.js"></script> -->



<?php wp_footer(); ?>
</body>
</html>



