<?php /* Template Name: ServiceCenter */ ?>
<?php get_header(); ?>
<section class="servicecenter__bg" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"> 
	<div class="container">
		<div class="servicecenter">
			<div class="servicecenter__text">
				<?php the_content(); ?>
			</div>
			<div class="servicecenter__form">
				<div class="blueform__form">
					<form action="">
						<div class="blueform__name">
							<input type="text" name="name" placeholder="Ваше имя">
						</div>
						<div class="blueform__phone">
							<input type="text" name="phone" placeholder="Номер телефона">
						</div>
						<div class="blueform__email">
							<input type="text" name="email" placeholder="Электронная почта">
						</div>
						<div class="blueform__messeg">
							<textarea name="messeg" placeholder="Ваше сообщение"></textarea>
						</div>
						<div class="blueform__checked">
							<label for="">
								<input type="checkbox">
								<span>Отправляя данную форму вы соглашаетесь с политикой конфиденциальности</span>
							</label>
						</div>
						<div class="blueform__btn">
							<button class="btn">Получить консультацию</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="servicecenter__cooperate-bg">
	<div class="container">
		<div class="cooperate__list">
			<h2><?php the_field('servicecenter__list_title'); ?></h2>
			<ul>
				<?php if(get_field('servicecenter__list_repeater')): ?>
				  <?php while(the_repeater_field('servicecenter__list_repeater')): ?>
				  	<li>
						<img src="<?php the_sub_field('servicecenter__list_repeater_icon'); ?>" alt="">
						<p><?php the_sub_field('servicecenter__list_repeater_text'); ?></p>
					</li>
				  <?php endwhile; ?>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</section>
<section class="company__sevices">
	<div class="container">
		<div class="company__sevices-title">
			<h2><?php the_field('servicecenter__services_title'); ?></h2>
		</div>
	</div>
	<div class="company__sevices-img">
		<img src="<?php the_field('servicecenter__services_img'); ?>" alt="">
	</div>
	<div class="container">
		<div class="company__sevices-text">
			<p><?php the_field('servicecenter__services_text'); ?></p>
		</div>
	</div>
</section>
<section class="ourservices">
	<div class="container">
		<div class="ourservices__title">
			<h2><?php the_field('servicecenter__spsik_title'); ?></h2>
		</div>
		<ul class="ourservices__box">
			<li>
				<strong>Название</strong>
				<strong>Стоимость</strong>
			</li>
			<?php if(get_field('servicecenter__spsik_repeater')): ?>
			  <?php while(the_repeater_field('servicecenter__spsik_repeater')): ?>
			  	<li>
					<span><?php the_sub_field('servicecenter__spsik_repeater_text'); ?></span>
					<span><?php the_sub_field('servicecenter__spsik_repeater_price'); ?></span>
				</li>
			  <?php endwhile; ?>
			<?php endif; ?>
		</ul>
	</div>
</section>
<section class="cv">
	<div class="container">
		<div class="cv__title">
			<?php the_field('servicecenter_cv_title'); ?>
		</div>
		<div class="cv__box">
			<div class="blueform__form">
				<form action="">
					<div class="blueform__name">
						<input type="text" name="name" placeholder="Ваше имя">
					</div>
					<div class="blueform__phone">
						<input type="text" name="phone" placeholder="Номер телефона">
					</div>
					<div class="blueform__email">
						<input type="text" name="email" placeholder="Электронная почта">
					</div>
					<div class="blueform__email">
						<input type="text" name='status' placeholder="На какую вакансию претендуете">
					</div>
					<div class="blueform__fail">
						<span>Прикрепите ваше резюме</span>
						<input type="file" name="cv">
					</div>
					<div class="blueform__checked">
						<label for="">
							<input type="checkbox">
							<span>Отправляя данную форму вы соглашаетесь с политикой конфиденциальности</span>
						</label>
					</div>
					<div class="blueform__btn">
						<button class="btn">Получить консультацию</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<section class="ourservices__address">
	<div class="container">
		<div class="ourservices__address-title">
			<h2><?php the_field('ourservices__address_title'); ?></h2>
		</div>
		<div class="ourservices__address-box">
			<?php if(get_field('ourservices__address_repeater')): ?>
			  <?php while(the_repeater_field('ourservices__address_repeater')): ?>
			    <div class="ourservices__address-item">
					<div class="ourservices__address-city">
						<strong><?php the_sub_field('ourservices__address_repeater_city'); ?></strong>
					</div>
					<div class="ourservices__address-flex">
						<div class="ourservices__address-left">
							<span><?php the_sub_field('ourservices__address_repeater_phone_text'); ?></span>
							<a href="tel:<?php the_sub_field('ourservices__address_repeater_phone_number'); ?>"><?php the_sub_field('ourservices__address_repeater_phone_number'); ?></a>
						</div>
						<div class="ourservices__address-right">
							<span><?php the_sub_field('ourservices__address_repeater_address_name'); ?></span>
							<?php the_sub_field('ourservices__address_repeater_address_text'); ?>
						</div>
					</div>
				</div>	
			  <?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="ourservices__text">
			<?php the_field('ourservices__address_text'); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>