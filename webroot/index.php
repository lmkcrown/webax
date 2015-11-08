<?php

/**
* Webax page controller
*
*/
// Include the essential config-file which also creates the $webax variable with its defaults
include(__DIR__ . '/config.php');


// Store all variables in the Webax container
$webax['title'] = "Index";



$webax['main'] = <<<EOD
<h1>Index</h1>
<p>Index page.</p>
EOD;



// Add js/files for inclusion
// $webax['javascript_include'][]   = 'js/main.js';
// $webax['javascript_include'][]   = 'js/other.js';


// Finally, leave it all to the rendering phase of Webax.
include(WEBAX_THEME_PATH);
