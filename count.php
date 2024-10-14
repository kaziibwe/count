<?php
// Set the target date and time
$targetDate = new DateTime('2038-01-19 00:00:00');
$startDate = new DateTime('2020-01-01 00:00:00');

// Calculate the difference between the two dates
$interval = $startDate->diff($targetDate);

// Display the remaining time
echo "Remaining time: ";
echo $interval->format('%y years, %m months, %d days, %h hours, %i minutes, %s seconds');
?>
