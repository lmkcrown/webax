<?php
/**
* Config file for Webax. Change settings here to affect installation
*
*/


/**
* Set the error reporting
*
*/
error_reporting(-1);            // Report all types of errors
ini_set('display_errors', 1);   // Display all errors
ini_set('output_buffering', 0); // Do not buffer outputs, write directly


/**
* Define Webax paths
*
*/
define('WEBAX_INSTALL_PATH', __DIR__ . '/..');
define('WEBAX_THEME_PATH', WEBAX_INSTALL_PATH . '/theme/render.php');


/**
* Include bootstrapping functions
*
*/
include(WEBAX_INSTALL_PATH . '/src/bootstrap.php');


/**
* Start the session
*
*/
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
* Create the Webax variable
*
*/
$webax = array();


/**
* Site wide settings
*
*/
$webax['lang']           = 'sv';
$webax['title_append']   = ' | Webax web template';
$webax['header'] = <<<EOD
<img class='sitelogo' src='img/webax.png' alt='Webax Logo'/>
<span class='sitetitle'>Webax web template</span>
<span class='siteslogan'>Reusable modules for PHP web development</span>
EOD;
$webax['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Lars Magnusson (lm@mail.se) | <a href='https://github.com/'>Webax på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

/**
* Theme related settings
*
*/
$webax['stylesheets']   = array('css/style.css');
$webax['favicon']       = 'favicon.ico';


/**
* Settings for JavaScript
*
*/
$webax['modernizr']          = 'js/modernizr.js';
$webax['jquery']             = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$webax['jquery']             = null; // Disable jQuery
$webax['javascript_include'] = array();
//$webax['javascript_include'] = array('js/main.js'); // To add extra javascript files


/**
* Google analytics
*
*/
$webax['google_analytics']   = 'UA-22093351-1'; // Set to null to disable


/**
* Navigation menu
*
*/
$webax['navmenu']   =   array(
    'home'  => array('text' => 'Home',  'url' => '?page=home'),
    'away'  => array('text' => 'Away',  'url' => '?page=away'),
    'about' => array('text' => 'Home',  'url' => '?page=home'),
);
