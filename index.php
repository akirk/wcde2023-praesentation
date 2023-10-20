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
echo str_replace( 'https://reveal-multiplex.glitch.me/client.js', 'https://reveal-multiplex.glitch.me/master.js', str_replace( 'secret: null', 'secret: "' .  $secret . '"', $index ) );
