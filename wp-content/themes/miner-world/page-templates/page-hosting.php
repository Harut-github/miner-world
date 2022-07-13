<?php /* Template Name: Hosting */ ?>
<?php get_header(); ?>
<section class="servicecenter__bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"> 
	<div class="container">
		<div class="servicecenter">
			<div class="servicecenter__text">
				<?php the_content(); ?>
			</div>
			<div class="servicecenter__form">
				<div class="hosting__calc">
					<div class="hosting__calc-title">
						<h2>Расчет стоимости</h2>
					</div>
					<div class="hosting__calc-box">
						<div class="hosting__calc-item">
							<span>Модель асика</span>
							<select name="" id="">
								<option value="">s17</option>
								<option value="">s17</option>
								<option value="">s17</option>
							</select>
						</div>
						<div class="hosting__calc-item">
							<span>Количество асиков</span>
							<div class="hosting__calc-count">
								<span>-</span>
								<input type="text" value="1">
								<span>+</span>
							</div>
							<div class="hosting__calc-rang">
								<input type="range">
							</div>
						</div>
					</div>
					<div class="hosting__calc-rez">
						<strong>Итого:</strong>
						<span>27500</span>
						рублей/месяц
					</div>
					<div class="hosting__calc-text">
						<p>Принимаем контейнеры со своим оборудованием до 1 МВт по тарифу 4,7 р/кВт.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="servicecenter__cooperate-bg hosting__list">
	<div class="container">
		<div class="cooperate__list">
			<h2><?php the_field('hosting_title'); ?></h2>
			<ul>
				<?php if(get_field('hosting_repeater')): ?>
				  <?php while(the_repeater_field('hosting_repeater')): ?>
				  	<li>
						<img src="<?php the_sub_field('hosting_repeater_icon'); ?>" alt="">
						<div class="hosting__text">
							<strong><?php the_sub_field('hosting_repeater_name'); ?></strong>
							<p><?php the_sub_field('hosting_repeater_text'); ?></p>
						</div>
					</li>
				  <?php endwhile; ?>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="open__button">
			<h2>Понравились условия майнинг-отеля?</h2>
			<p>Оставьте заявку на размещение, и мы свяжемся с вами</p>
			<button class="open__btn">Оставить заявку </button>
		</div>
	</div>
</section>
<?php get_footer(); ?>