<?php 
/*
* Template name: Шаблон Контакты 
*/
get_header();
// send contact
if (isset($_POST['contact'])) {
	$error = ale_send_contact($_POST['contact']);
}
?>


<?php while ( have_posts() ) : the_post(); ?>
		<section class="inner contacts">
			<div class="wrapper">
				<div class="detail">
					<p class="detail__title"><?php echo get_metadata('post', get_the_ID(), 'legal_advisory_title_left', true); ?></p>
					<ul class="contact">
						<li class="contact__item">
							<div class="contact__icon">
								<svg width="19" height="24">
									<use xlink:href="#pin"/>
								</svg>
							</div>
							<p class="contact__text contact__text_address"><?php echo get_metadata('post', get_the_ID(), 'legal_advisory_contact_address', true); ?></p>
						</li>
						<li class="contact__item">
							<div class="contact__icon">
								<svg width="17" height="17">
									<use xlink:href="#phone"/>
								</svg>
							</div>
							<div class="contact__phones">
								<a href="tel:<?php echo get_metadata('post', get_the_ID(), 'legal_advisory_contact_phone1',true); ?>" class="contact__text contact__text_phone"><?php echo get_metadata('post', get_the_ID(), 'legal_advisory_contact_phone1',true); ?></a>
								<a href="tel:<?php echo get_metadata('post', get_the_ID(), 'legal_advisory_contact_phone2',true); ?>" class="contact__text contact__text_phone">tel:<?php echo get_metadata('post', get_the_ID(), 'legal_advisory_contact_phone2',true); ?></a>
							</div>
						</li>
						<li class="contact__item">
							<div class="contact__icon">
								<svg width="23" height="17">
									<use xlink:href="#mail"/>
								</svg>
							</div>
							<p class="contact__text contact__text_mail"><?php echo get_metadata('post', get_the_ID(), 'legal_advisory_contact_email', true); ?></p>
						</li>
					</ul>
					<div class="detail__time">
						<svg width="35" height="35">
							<use xlink:href="#time"/>
						</svg>
						<p><?php echo get_metadata('post', get_the_ID(), 'legal_advisory_contact_calendar', true); ?></p>
					</div>
				</div>
				<form method="post" action="<?php the_permalink();?>" class="inner__form log" id="popupOrder">
					<p class="log__title"><?php echo get_metadata('post',get_the_ID(), 'wayup_contact_title_right',true) ?></p>
					<div class="log__subtitle"><?php the_content(); ?>
                    <?php if (isset($_GET['success'])) : ?>
                            <p class="success"><?php _e('Thank you for your message!', 'wayup')?></p>
                        <?php endif; ?>
                        <?php if (isset($error) && isset($error['msg'])) : ?>
                            <p class="error"><?php echo $error['msg']?></p>
                        <?php endif; ?>
					<div class="log__group">
						<label>Имя</label>
						<input type="text" name="name" class="log__input">
					</div>
					<div class="log__group">
						<label>Телефон</label>
						<input type="tel" name="tel" class="log__input">
					</div>
					<div class="log__group log__group_company">
						<label>Компания</label>
						<input type="text" name="company" class="log__input">
					</div>
					<div class="log__group log__group_textarea">
						<label>Сообщение</label>
						<textarea type="text" name="message" class="log__input"></textarea>
					</div>
					<p class="log__line"><span>*</span>Поля обязательные для заполнения</p>
					<div class="log__wrap">
						<div class="log__group check">
							<input id="insight" type="checkbox" name="learn" value="learn">
							<label for="insight">Я ознакомился и согласен с <span><a href="#">Правилами пользования</a></span> и <span><a href="#">политикой конфиденциальности</a></span> сайта</label>
						</div>
						<div class="log__btn">
							<input id="order" data-submit type="submit" value="Отправить" class="btn"/>
						</div>
					</div>
					<input type="hidden" name="contact[email]" value="no-rew@mail.ru"/>
                      <?php wp_nonce_field() ?>
				</form>
			</div>
		</section>
		<section class="map">
			<?php echo do_shortcode(get_metadata('post', get_the_ID(), 'legal_advisory_contact_map', true)); ?>
		</section>
		<?php 
    endwhile; 

get_footer(); ?>