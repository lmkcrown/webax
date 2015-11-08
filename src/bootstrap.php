<?php
/**
* Bootstrapping functions, essential and needed for Webax to work together with some common helpers
*
*/


/**
* Default exception handler
*
*/
function myExceptionHandler($exception)
{
    echo "Anax: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceString(), "</pre>";
}
set_exception_handler('myExceptionHandler');



/**
* Autoloader for classes
*
*/
function myAutoloader($class)
{
    $path = WEBAX_INSTALL_PATH . "/src/{$class}/{$class}.php";
    if (is_file($path)) {
        include($path);
    } else {
        throw new Exception("Classfile '{$class}' does not exist.");
    }
}
spl_autoload_register('myAutoloader');


/**
* Dumping arrays with formatting
*
*/
function dump($array)
{
    echo "<pre>" . htmlentities(print_r($array, 1)) . "</pre>";
}
