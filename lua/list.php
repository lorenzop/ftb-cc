<?php
/*
 * PoiXson - List files for dl lua script
 * license GPL-3
 * author lorenzo at poixson.com
 * link http://ftb.poixson.com/lua/
 */

header("Content-Type: text/plain");

$entries = \scandir('./');

foreach ($entries as $entry) {
	if ($entry == '.' || $entry == '..') continue;
	if (\is_dir($entry)) continue;
	if ($entry == 'error_log') continue;
	if (\substr($entry, -4) == '.php') continue;
	echo $entry;
	echo "\n";
}
