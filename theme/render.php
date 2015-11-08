<?php
/**
* Render content to trader_ht_trendmode*
*/

// Extract the data array to variables for easier access tin the template files.
extract($webax);

// Include the template functions
include(__DIR__ . '/functions.php');

// Include the template file
include(__DIR__ . '/index.tpl.php');
