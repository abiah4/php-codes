<?php
//eleventh task

$birthdayDate = '1999-01-30';
$today = new DateTime();
$birthday = new DateTime($birthdayDate);

$nextBrithday= new DateTime($birthdayDate);
$nextBrithday->setDate($today->format('Y'), $birthday->format('m') , $birthday->format('d'));

if($nextBrithday < $today){
    $nextBrithday->modify('+1 year');
}

$daysUntilbirthday = $today->diff($nextBrithday)->days;
if ($nextBrithday < $today){
    $daysUntilbirthday = -$today->diff($birthday)->days;
}

echo "days till next birthday: $daysUntilbirthday days!!" . "\n";

//Twelfth task

$date1 = '1981-11-04';
$date2 = '2013-09-04';

$startDate = new DateTime($date1);
$endDate = new DateTime($date2);
$interval = $startDate->diff($endDate);
 
echo $interval->y . " years " . $interval->m . " months " . $interval->d . " day " . "\n";

//Thirteenth task


$date3 = '1999-01-30';
$date4 = '2024-10-03';

$startDate2 = new DateTime($date3);
$endDate2 = new DateTime($date4);

$interval = $startDate2->diff($endDate2);
$totalDays = $startDate2->diff($endDate2)->days;

echo "total days $totalDays " . "\n";

echo $interval->y . " Year ". ($interval->y !== 1 ? 's' : '') . "\n";
echo $interval->m . " Month ". ($interval->m !== 1 ? 's' : '') . "\n";
echo $interval->d . " Day ". ($interval->d !== 1 ? 's' : '') . "\n";
echo $interval->h . " Hour ". ($interval->h !== 1 ? 's' : '') . "\n";
echo $interval->i . " Minute ". ($interval->i !== 1 ? 's' : '') . "\n";
echo $interval->s . " Second ". ($interval->s !== 1 ? 's' : '') . "\n";

?>