<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package miner-world
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
  <div class="header__top">
     <p>Узнай актуальные цены на майнеры для партнеров </p>
  </div>

  <div class="container">
    <div class="header__content">
      <div class="header__left">
        <div class="header__logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/header-logo.svg" alt="">
          </a>
        </div>
        <div class="header__city">
          <ul>
            <li>
              Ваш город: <strong>Москва</strong>
              <ul class="header__city-sub">
                <li>Москва</li>
                <li>Санкт-Петербург</li>
                <li>Иркутск</li>
                <li>Заказ из Китая</li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      <div class="header__center">
        <div class="header__catalog">
          <a href="">Каталог</a>
        </div>
        <div class="header__search">
          <form role="search" method="get" class="search-form search_header" action="<?php echo home_url( '/' ); ?>">
            <label>
                <input type="search" name="s" placeholder="Что будем искать?"  value="<?php echo get_search_query() ?>" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" required="" class="input-popup search-field">
                <div class="header__search-img">
                  <button type="submit" class="icon-right">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/search.svg" alt="">
                  </button>
                </div>
                
            </label>
          </form>
        </div>
      </div>
      
      <div class="header__right">
        <div class="header__leng">
          RU
        </div>
        <div class="header__coll">
          <a href="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/call.svg" alt="">
          </a>
        </div>
        <div class="header__comparison">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/comparisons.svg" alt="">
        </div>
        <div class="header__cart">
          <a href="">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/svg/cart-header.svg" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="header__tradingview-widget">
    <div class="tradingview-widget-container">
      <div class="tradingview-widget-container__widget"></div>
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
         {
         "symbols": [
           {
             "description": "",
             "proName": "BITSTAMP:BTCUSD"
           },
           {
             "description": "",
             "proName": "COINBASE:ETHUSD"
           },
           {
             "description": "",
             "proName": "BINANCE:DOGEUSD"
           },
           {
             "description": "",
             "proName": "COINBASE:LTCUSD"
           }
         ],
         "showSymbolLogo": true,
         "colorTheme": "light",
         "isTransparent": false,
         "displayMode": "regular",
         "locale": "ru"
         }
      </script>
    </div>  
  </div>
  <div class="container">
    <div class="header__menu">
      <?php
        wp_nav_menu(
          array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
          'container'=> false,
          )
          );
      ?> 
    </div>
  </div>
</header>




