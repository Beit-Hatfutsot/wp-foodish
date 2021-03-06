<?php
/**
 * Seo functions functions
 *
 * @author     Htmline (Roy Hizkya)
 * @copyright  Copyright (c) 2020
 * @version    1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * htmline_gtm_head
 *
 * GTM - head
 */
function htmline_gtm_head() {

	?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WR7JM9H');</script>
	<!-- End Google Tag Manager -->
	<?php

}
add_action( 'wp_head', 'htmline_gtm_head' );

/**
 * htmline_gtm_body
 *
 * GTM - body
 */
function htmline_gtm_body() {

	?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WR7JM9H"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php

}
add_action( 'wp_body_open', 'htmline_gtm_body' );

/**
 * htmline_facebook_pixel_code
 *
 * Facebook Pixel
 */
function htmline_facebook_pixel_code() {

	?>
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '191445802992353');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=191445802992353&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
	<?php 

}
add_action( 'wp_head', 'htmline_facebook_pixel_code' );