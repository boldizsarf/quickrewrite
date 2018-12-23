<?php
/**
 * Quick Rewrite Engine
 * by Boldizsar Fodor
 * Version 0.1
 */

/** Load the config */
$config = simplexml_load_file('config.xml');

/** Explode params */
$param = explode('/', $_SERVER['REQUEST_URI']);


/** Index */
if (empty($param[1])) {
    if (isset($config->index['href'])) {
        require $config->index['href'];
    }
}

/** Pages and params */
foreach ($config->page as $page) {
    if ($param[1] == $page['name']) {
        foreach ($page->param as $paramcf) {
            $name = $paramcf["string_name"];
            $$name = $param[intval($paramcf["id"])];
        }
        require $page['href'];
    }
}
