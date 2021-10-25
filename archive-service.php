<?php 
get_header();
?>

<!-- Services -->
		<section class="inner services tabs">
			<div class="wrapper">
				<h2 class="services__title secondary-title"><span><?php echo $legal_advisory['servicearchivetitle1']; ?></span><br><?php echo $legal_advisory['servicearchivetitle2']; ?></h2>
				<div class="tabs__wrap">

					<p class="tabs__descr"><?php echo $legal_advisory['servicearchivedesc']; ?></p>
					<!-- Cases titles -->
					<ul class="tabs__caption">
						<?php $services_types = get_terms(array(
                            'taxonomy' => 'service-type',
                            'hide_empty' => false,
                        ));
                        $i = 0;
                        $active = '';
                        foreach($services_types as $type){
                            if($i == 0){ $active = 'active';} else {
                                $active = '';
                            }
                            echo '<li class ="'.$active.'">'.$type->name.'</li>';
                            $i++;
                        }
                        ?>
						<!-- <li>Малый бизнес</li> -->
					</ul>

				</div>


                <?php 
                $j = 0;
                $current = '';
                foreach($services_types as $category){
                    if($j == 0){ $current = 'active';} else {$current = '';}
                ?>

				<!-- Cases content one-->
				<div class="tabs__content <?php echo esc_attr($current); ?>">
					<ul class="services__list">
                        <?php 
                        $services = new WP_Query(array(
									'post_type' => 'service',
									'posts_per_page' => -1,
									'tax_query' => array(
										array(
											'taxonomy' => 'service-type',
											'field' => 'slug',
											'terms' => $category->slug,
										),
										),
							));	
							
							if ( $services->have_posts() ) :

                 				while ( $services->have_posts() ) : $services->the_post(); 
								 $service_icon_bg_style = '';
								 $service_icon_item_style = '';

								 if(get_metadata('post', get_the_ID(), 'legal_advisory_service_icon', true)) {
									 $service_icon_bg_style = 'services__bg_'.get_metadata('post', get_the_ID(), 'legal_advisory_service_icon', true);
									 $service_icon_item_style = 'services__item_'.get_metadata('post', get_the_ID(), 'legal_advisory_service_icon', true);
								 } else {
									 $service_icon_bg_style = 'services__item_stat';
									 $service_icon_item_style = 'services__bg_stat';

								 }
								 
								 ?>

						<li class="services__item <?php echo $service_icon_item_style; ?>">
							<h3 class="services__heading"><?php the_title(); ?></h3>
							<p class="services__descr"><?php the_excerpt(); ?></p>
							<p class="services__price"><?php echo $legal_advisory['servicecurrency']; echo get_metadata('post', get_the_ID(), 'legal_advisory_service_cost', true); ?></p>
							<a href="<?php the_permalink(); ?>" class="services__order btn">Подробнее</a>
							<div class="services__bg <?php echo $service_icon_bg_style; ?>"></div>
						</li>

                        <?php endwhile;
                        wp_reset_postdata();
                        endif; ?>

						<!-- <li class="services__item services__item_idea">
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
						<li class="services__item services__item_info">
							<h3 class="services__heading">Информационные технологии / ТМТ</h3>
							<p class="services__descr">Комплексная юридическая поддержка бизнеса в сфере связи, медиа, рекламы</p>
							<p class="services__price">$525</p>
							<a href="service.html" class="services__order btn">Подробнее</a>
							<div class="services__bg services__bg_info"></div>
						</li>
						<li class="services__item services__item_busy">
							<h3 class="services__heading">Government <br>Relations</h3>
							<p class="services__descr">Решение вопросов, связанных с регулированием бизнеса</p>
							<p class="services__price">$345</p>
							<a href="service.html" class="services__order btn">Подробнее</a>
							<div class="services__bg services__bg_busy"></div>
						</li>
						<li class="services__item services__item_target">
							<h3 class="services__heading">Коммерческая практика</h3>
							<p class="services__descr">Услуги по комплексному юридическому сопровождению бизнеса</p>
							<p class="services__price">$410</p>
							<a href="service.html" class="services__order btn">Подробнее</a>
							<div class="services__bg services__bg_target"></div>
						</li> -->

					</ul>
				</div><!-- End cases content one-->

                <?php 
                $j++; }
                 ?>

				<!-- <div class="tabs__content">
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
						<li class="services__item services__item_info">
							<h3 class="services__heading">Информационные технологии / ТМТ</h3>
							<p class="services__descr">Комплексная юридическая поддержка бизнеса в сфере связи, медиа, рекламы</p>
							<p class="services__price">$525</p>
							<a href="service.html" class="services__order btn">Подробнее</a>
							<div class="services__bg services__bg_info"></div>
						</li>
						<li class="services__item services__item_busy">
							<h3 class="services__heading">Government <br>Relations</h3>
							<p class="services__descr">Решение вопросов, связанных с регулированием бизнеса</p>
							<p class="services__price">$345</p>
							<a href="service.html" class="services__order btn">Подробнее</a>
							<div class="services__bg services__bg_busy"></div>
						</li>
						<li class="services__item services__item_target">
							<h3 class="services__heading">Коммерческая практика</h3>
							<p class="services__descr">Услуги по комплексному юридическому сопровождению бизнеса</p>
							<p class="services__price">$410</p>
							<a href="service.html" class="services__order btn">Подробнее</a>
							<div class="services__bg services__bg_target"></div>
						</li>
					</ul>
				</div>

				<div class="tabs__content">
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
						<li class="services__item services__item_info">
							<h3 class="services__heading">Информационные технологии / ТМТ</h3>
							<p class="services__descr">Комплексная юридическая поддержка бизнеса в сфере связи, медиа, рекламы</p>
							<p class="services__price">$525</p>
							<a href="service.html" class="services__order btn">Подробнее</a>
							<div class="services__bg services__bg_info"></div>
						</li>
						<li class="services__item services__item_busy">
							<h3 class="services__heading">Government <br>Relations</h3>
							<p class="services__descr">Решение вопросов, связанных с регулированием бизнеса</p>
							<p class="services__price">$345</p>
							<a href="service.html" class="services__order btn">Подробнее</a>
							<div class="services__bg services__bg_busy"></div>
						</li>
						<li class="services__item services__item_target">
							<h3 class="services__heading">Коммерческая практика</h3>
							<p class="services__descr">Услуги по комплексному юридическому сопровождению бизнеса</p>
							<p class="services__price">$410</p>
							<a href="service.html" class="services__order btn">Подробнее</a>
							<div class="services__bg services__bg_target"></div>
						</li>
					</ul>
				</div> -->
			</div>

		</section><!-- End services -->

<?php get_footer(); ?>