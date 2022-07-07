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
<div class="container">
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
