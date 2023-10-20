<?php
echo str_replace( 'https://reveal-multiplex.glitch.me/client.js', 'https://reveal-multiplex.glitch.me/master.js', str_replace( 'secret: null', 'secret: "' .  getenv( 'SECRET' ) . '"', file_get_contents( __DIR__ . '/index.html' ) ) );
