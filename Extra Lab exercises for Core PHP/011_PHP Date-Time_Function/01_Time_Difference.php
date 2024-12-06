<?php
date_default_timezone_set('UTC');

$today = new DateTime();

$next_birthday = new DateTime('2024-12-31');

$interval = $today->diff($next_birthday);

echo "Time Difference: " . $interval->format('%y years, %m months, %d days, %h hours, %i minutes, %s seconds');
?>
