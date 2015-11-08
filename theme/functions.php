<?php
/**
* Theme related functions
*
*/

/**
* Get title for the webpage by cncatenating page specific title with site-wide title
*
*/
function get_title($title)
{
    global $webax;
    return $title . (isset($webax['title_append']) ? $webax['title_append'] : null);
}
