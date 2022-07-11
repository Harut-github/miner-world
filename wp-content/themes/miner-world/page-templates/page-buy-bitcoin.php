<?php /* Template Name: Buy Bitcoin */ ?>
<?php get_header(); ?>
<section>
	<div class="container">
		<div class="buybitcoin__title">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="buybitcoin">
			<div class="buybitcoin__content">
				<?php the_content(); ?>
				<div class="buybitcoin__box">
					<div class="buybitcoin__link">
						<a href="tel:+7(964)230-44-82">+7(964)230-44-82 </a><br>
						<a href="">@MW_ex</a><br>
					</div>
					<div class="buybitcoin__link">
						<a href="tel:+7(925)988-54-08">+7(925)988-54-08</a><br>
						<a href="">@Crypto_V0va</a><br>
					</div>
					<span>Прием заказов на сайте круглосуточно</span>
				</div>
			</div>
			<div class="buybitcoin__form">
				<div class="blueform__form">
					<form action="">
						<div class="blueform__name">
							<input type="text" name="name" placeholder="Ваше имя">
						</div>
						<div class="blueform__phone">
							<input type="text" name="phone" placeholder="Номер телефона">
						</div>
						<div class="blueform__email">
							<input type="text" name="email" placeholder="Дополнительно можно оставить электронную почту">
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
<?php get_footer(); ?>