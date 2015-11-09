<?php
/**
* Webax page controller
*
*/
// Include the essential config-file which also creates the $webax variable with its defaults
include(__DIR__ . '/config.php');

// Add style for csource
$webax['stylesheets'][] = 'css/source.css';

// Create the object to display sourcecode
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));


// Store all variables in the Webax container
$webax['title'] = "Visa källkod";

$webax['main'] = "<h1>Visa källkod</h1>" . $source->View();


// Finally, leave it all to the rendering phase of Webax.
include(WEBAX_THEME_PATH);
