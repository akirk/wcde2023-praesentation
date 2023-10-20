<?php
$index = file_get_contents( __DIR__ . '/index.html' );
$secret = getenv( 'REVEALJS_SECRET' );
if ( ! $secret ) {
	if  ( isset( $_GET['secret'] ) ) {
		$secret = $_GET['secret'];
	}
	if ( ! $secret ) {
		echo $index;
		exit;
	}
}
echo str_replace( "{ src: 'https://reveal-multiplex.glitch.me/client.js', async: true },", "{ src: 'https://reveal-multiplex.glitch.me/master.js', async: true },", str_replace( 'secret: null', 'secret: "' .  $secret . '"', $index ) );
