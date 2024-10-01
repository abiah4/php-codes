<?php
//current Date and time
echo "Current date and time: " . date('Y-m-d H:i:s') . "\n";

//Formatting dates
$date = '2024-10-01';
$formattedDate = date('F j, Y', strtotime($date));
echo "Fromatted Date: " . $formattedDate . "\n";

//Date Difference

$date1 = new DateTime('2023-10-01');
$date2 = new DateTime('2024-01-01');
$interval = $date1->diff($date2);
echo "Difference: ". $interval->days . " days" . "\n";

//add subtract days

$date = new DateTime('2023-11-01');
$date->modify('+10 days');
echo "New date: " . $date->format('Y-m-d') . "\n";

//getting timestamp

$timestamp = time();
echo "Current timestamp: " . $timestamp . "\n";

//creating a date from timestamp

$timestamp = 16959403950;
$date = date('Y-m-d H:i:s', $timestamp);
echo "Date from Timestamp: " . $date . "\n";

//checking if a year is leap year
$year = 2024;
if (date('L', strtotime("$year-01-01"))){
    echo "$year is a leap year." . "\n";
} else {
    echo "$year is not a leap year." . "\n";
}
//Displaying a countdown timer

$targetDate = new DateTime('2024-11-02 00:00:00');
$now = new DateTime();
$interval = $now->diff($targetDate);

if($now >= $targetDate){
    echo "The target date has passed!". "\n";
} else {
    echo "Countdown to new year: " . $interval->format('%d days , %h hours , %i minutes , %s seconds') . "\n";
}

//setting timezone

date_default_timezone_set('Asia/Qatar');
echo "Current date and time in Qatar: " . date('Y-m-d H:i:s') . "\n";

//get first day of the month 
$firstDay = date('Y-m-01');
echo "First day of the current month is: " . $firstDay . "\n";

?>