<?php
$currenttime = time();

echo $currenttime . '<br>';

echo $currenttime + 5 * 24 * 60 * 60 . '<br>';

echo $currenttime - 60 * 60 * 24 . '<br>';

echo date('d/m/Y G:ia', $currenttime + 5 * 24 * 60 * 60) . '<br>';

echo date_default_timezone_get() . '<br>';

date_default_timezone_set('UTC');

echo date('d/m/Y G:ia', $currenttime + 5 * 24 * 60 * 60) . '<br>';

// links
// https://www.php.net/manual/en/datetime.format.php
// https://www.php.net/manual/en/timezones.php
// https://www.php.net/manual/en/datetime.formats.php#datetime.formats.relative