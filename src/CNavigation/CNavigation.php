<?php

class CNavigation
{
    public static function GenerateMenuParameter($items, $class)
    {
        $html = "<nav class=\"$class\">\n";
        foreach ($items as $key => $item) {
            $selected = (isset($_GET['page'])) && $_GET['page'] == $key ? "selected" : null;
            $html .= "<a class=\"$selected\" href=\"{$item['url']}\">{$item['text']}</a>\n";
        }
        $html .= "</nav>\n";
        return $html;
    }

    public static function GenerateMenuFile($items, $class)
    {
        $html = "<nav class='$class'>\n";
        foreach($items as $key => $item) {
            $basename = str_replace(".php","",basename($_SERVER['REQUEST_URI']));
            $selected = ($basename == $key) ? 'selected' : null;
            $html .= "<a href='{$item['url']}' class='{$selected}'>{$item['text']}</a>\n";
        }
        $html .= "</nav>\n";
        return $html;
    }
};
