<?php

class CNavigation
{
    public static function GenerateMenuParameter($items, $class)
    {
        $html = "<nav class=\"$class\">\n";
        foreach ($items as $key => $item) {
            $selected = (isset($_GET['page'])) && $_GET['page'] == $key ? "selected" : "notSelected";
            $html .= "<a class=\"$selected\" href=\"{$item['url']}\">{$item['text']}</a>\n";
        }
        $html .= "</nav>\n";
        return $html;
    }

    public static function GenerateMenuFile($items, $class)
    {
        $html = "<nav class='$class'>\n";
        foreach($items as $key => $item) {
            $basename = str_replace(".php","",basename($_SERVER['PHP_SELF']));
            $selected = ($basename == $key) ? 'selected' : 'notSelected';
            $html .= "<a href='{$item['url']}' class='{$selected}'>{$item['text']}</a>\n";
        }
        $html .= "</nav>\n";
        return $html;
    }
};
