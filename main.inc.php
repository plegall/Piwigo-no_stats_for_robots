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

$bots = array(
  'Googlebot',
  'bingbot',
  'Baiduspider',
  'yandex',
  'AhrefsBot',
  'msnbot',
  'Slurp',
  'BLEXBot',
  'VoilaBot',
  'MegaIndex',
  'MJ12bot',
  'Mediapartners-Google',
  'OpenSearchServer',
  'MSNBot',
  'ExaBot',
  'MooveOnBot',
  'gloObotBot',
  'VerticrawlBot',
  'TwengaBot',
  'YacyBot',
  'BingBot',
  'Adidxbot',
  'BingPreview',
  'DuckDuckBot',
  'AynidBot',
  'Heritrix',
  'SemrushBot',
  'DomainCrawler',
  'DotBot',
  'exensa',
  'OpenLinkProfiler',
  'YisouSpider',
  'GarlikCrawler',
  'UptimeRobot',
  'Exalead',
  'Riddler',
  'seoscanners',
  'vebidoobot',
  'XoviBot',
  'BUbiNG',
  'MauiBot',
  'The Knowledge AI',
  'Seekport Crawler',
  'bnf.fr_bot',
  );

if (isset($_SERVER["HTTP_USER_AGENT"])
    and preg_match('/('.implode('|', $bots).')/', $_SERVER['HTTP_USER_AGENT']))
{
  add_event_handler('pwg_log_allowed', create_function('', 'return false;'));
  add_event_handler('allow_increment_element_hit_count', create_function('$b', 'return false;'));
}
?>
