Kantan Compiler
===============

Kantan Compiler handles SCSS and minifies CSS and JS into a single file.

It is an extension plugin for Kantan theme. There are no extra requirements from the server.


Why use it
-------------

How many times have you wished to minify in a clean way all the stylesheets and scripts of a WordPress website? <br>
WordPress offers the way to include JS specifying where to import the script ( within `<head>` or before `</body>` ). <br>
It's good practice include JS before `</body>` for better performances, but not every WordPress plugin's developer is prone to do so.

Kantan Compiler takes every CSS and JS asset included using `wp_enqueue_style()` and `wp_enqueue_script()`, merges and minifies them.

How it works
-------------

You can simply include your stylesheets using the WordPress way:

``` php
<?php
wp_enqueue_style( 'screen',  get_template_directory_uri() . '/css/screen.css' );
wp_enqueue_style( 'home',    get_template_directory_uri() . '/sass/home.scss' );
```
As you can see I have included three different type of stylesheets: CSS / SCSS / SASS / LESS. <br>
This will work! AssetsMinify will compile 'em all and will combine them in a single css file.

``` php
<?php
wp_enqueue_script( 'script1', get_template_directory_uri() . '/js/script1.js', array(), '1.0', false );
wp_enqueue_script( 'script2', get_template_directory_uri() . '/js/script2.js', array(), '1.0', true );
wp_enqueue_script( 'script4', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array(), '1.0', true );
```
Kantan Compiler detects which are the scripts that would go within the `<head>` ( in the previous sample only script1 ) and which would go before `</body>` ( script2 and script3 ).
External scripts are not managed by Kantan Compiler (so script4 in the sample will be included with a separate `<script>` ).

Although it is not a best practice you can define resources inclusions basing on the WordPress page just like this:

``` php
<?php
if ( is_page( 2 ) ) {
	wp_enqueue_style( 'stylesheet-name' );
}
```