<?php
/*
Plugin Name: No Stats For Robots
Version: auto
Description: Do not log visits from search engine robots (history and hits)
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=
Author: plg
Author URI: http://le-gall.net/pierrick
*/

if (!defined('PHPWG_ROOT_PATH'))
{
  die('Hacking attempt!');
}

if (isset($_SERVER["HTTP_USER_AGENT"])
    and preg_match('/(Googlebot|bingbot|Baiduspider|yandex|AhrefsBot|msnbot|Slurp)/', $_SERVER['HTTP_USER_AGENT']))
{
  add_event_handler('pwg_log_allowed', create_function('', 'return false;'));
  add_event_handler('allow_increment_element_hit_count', create_function('$b', 'return false;'));
}
?>
