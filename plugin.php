<?php
/**
 * Plugin Name: Kantan Compiler
 * Plugin URI: https://github.com/xama5/kantan-compiler
 * Description: WordPress plugin to minify JS and CSS assets.
 * Author: xama5
 * Contributors: Alessandro Carbone, pputzer
 * Version: 1.0.0
 * Author URI: https://github.com/xama5
 */
require dirname(__FILE__) . '/vendor/autoload.php';
KantanCompiler::getInstance();