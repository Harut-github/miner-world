<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package miner-world
 */

?>

<?php get_template_part( 'template-parts/form-blue'); ?>

<footer>
	<div class="container">
		<div class="footer">
			<div class="footer__left">
				<div class="footer__logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/logo-footer.svg" alt="">
					</a>
				</div>
				<div class="footer__rekvizits">
					<div class="footer__rekvizits-item">
						<strong>ИП Турчанинов С.С.</strong>
						<p>ИНН: 380896162495</p>
						<p>ОГРНИП: 320385000092972</p>
					</div>
					<div class="footer__rekvizits-item">
						<strong>ИП Радзиловский М.С.</strong>
						<p>ИНН: 381169680021</p>
						<p>ОГРНИП: 318385000081820</p>
					</div>
				</div>
				<div class="footer__copyright">
					© Miner World, 2017-<?php echo date('Y'); ?>.
				</div>
			</div>
			<div class="footer__center">
				<div class="footer__menu">
					<ul>
						<li><strong>Меню</strong></li>
						<li><a href="">О компании</a></li>
						<li><a href="">Узнайте больше о майнинге</a></li>
						<li><a href="">Сотрудничество</a></li>
						<li><a href="">Оплата и доставка</a></li>
						<li><a href="">Представительства</a></li>
					</ul>
				</div>
				<div class="footer__menu">
					<ul>
						<li><strong>Каталог</strong></li>
						<li><a href="">ASIC-майнеры</a></li>
						<li><a href="">Комплектующие</a></li>
						<li><a href="">Холодные кошельки</a></li>
					</ul>
				</div>
			</div>
			<div class="footer__right">
				<div class="footer__contacts">
					<h2>Контакты</h2>
					<strong>Телефон</strong>
					<a href="tel:">+7 (926) 899-94-77</a>
					<strong>E-mail</strong>
					<a href="mailto:">miner-world@yandex.ru</a>
					<strong>Адрес</strong>
					<p>
						Москва, Шмитовский проезд, 34с10 <br>  
                        Москва, Каширское шоссе, д.4 к.2 <br> 
                        Иркутск, ул. Карла Маркса, д. 30 <br> 
                        Иркутск, ул. Байкальская, 157/1
					</p>
					<strong>Социальные сети</strong>
					<ul>
						<li>
							<a href="">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/svg/vk.svg" alt="">
							</a>
						</li>
						<li>
							<a href="">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/svg/youtube.svg" alt="">
							</a>
						</li>
						<li>
							<a href="">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/svg/telegram.svg" alt="">
							</a>
						</li>
						<li>
							<a href="">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/svg/tiktok.svg" alt="">
							</a>
						</li>
					</ul>
					<strong>Работать с нами</strong>
					<a href="tel:">office@miner-world.ru</a>
				</div>
			</div>
		</div>
		<div class="footer__mob">
			<div class="footer__logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/logo-footer.svg" alt="">
				</a>
			</div>
			<div class="footer__dropdown dropdown-1">
				Юридическая информация
			</div>
			<div class="footer__dropdown-1">
				<div class="footer__rekvizits">
					<div class="footer__rekvizits-item">
						<strong>ИП Турчанинов С.С.</strong>
						<p>ИНН: 380896162495</p>
						<p>ОГРНИП: 320385000092972</p>
					</div>
					<div class="footer__rekvizits-item">
						<strong>ИП Радзиловский М.С.</strong>
						<p>ИНН: 381169680021</p>
						<p>ОГРНИП: 318385000081820</p>
					</div>
				</div>
			</div>
			<div class="footer__dropdown dropdown-2">
				Контакты
			</div>
			<div class="footer__dropdown-2">
				<div class="footer__contacts">
					<strong>Адрес</strong>
					<p>
						Москва, Шмитовский проезд, 34с10 <br>  
                        Москва, Каширское шоссе, д.4 к.2 <br> 
                        Иркутск, ул. Карла Маркса, д. 30 <br> 
                        Иркутск, ул. Байкальская, 157/1
					</p>
					<strong>Телефон</strong>
					<a href="tel:">+7 (926) 899-94-77</a>
					<strong>E-mail</strong>
					<a href="mailto:">miner-world@yandex.ru</a>
					<strong>Работать с нами</strong>
					<a href="tel:">office@miner-world.ru</a>
				</div>
			</div>
			<div class="footer__copyright-mob">
				<div class="footer__copyright">
					© Miner World, 2017-<?php echo date('Y'); ?>.
				</div>
				<ul>
					<li>
						<a href="">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/svg/vk.svg" alt="">
						</a>
					</li>
					<li>
						<a href="">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/svg/youtube.svg" alt="">
						</a>
					</li>
					<li>
						<a href="">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/svg/telegram.svg" alt="">
						</a>
					</li>
					<li>
						<a href="">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/svg/tiktok.svg" alt="">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery-3.2.1.min.js"></script>

<script>
	//footer js dropdown
	$(document).on("click",".dropdown-1",function() {
	    $('.footer__dropdown-1').toggle('slow');
	    $('.dropdown-1').toggleClass('footer__dropdown--active');
	});
	$(document).on("click",".dropdown-2",function() {
	    $('.footer__dropdown-2').toggle('slow');
	    $('.dropdown-2').toggleClass('footer__dropdown--active');
	});
</script>

<script>
//Departments Tabs
(function($) {
  $(function() {
  	
  	$(".tabs__caption").children("li").eq(0).addClass('active');
  	$(".tabs__content").eq(0).addClass('active');
    $("ul.tabs__caption").on("click", "li:not(.active)", function() {
      $(this)
        .addClass("active")
        .siblings()
        .removeClass("active")
        .closest("div.tabs")
        .find("div.tabs__content")
        .removeClass("active")
        .eq($(this).index())
        .addClass("active");
    });
  });
})(jQuery);
</script>

</body>
</html>
