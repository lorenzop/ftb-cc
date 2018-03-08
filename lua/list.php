<?php
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
