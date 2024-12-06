<?php
$timezone = new DateTimeZone('India/kolkota');
$date = new DateTime('now', $timezone);
$day = $date->format('l');

if ($day == "Sunday") {
    echo "Happy Sunday!";
} else {
    echo "Today is $day";
}
?>
