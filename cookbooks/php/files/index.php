<?php
//Countdown to the weekend
session_start(); // Start the users session, and create a session cookie.
ob_start();
$rootdir = '/storage/mijndomein/users/176270/public/sites/www.danielsol.nl';
echo '<link rel="stylesheet" type="text/css" media="screen" href="/stylebl.php"/>';

$numOfTheWeek = date('N');
// l (lowercase L) full textual representation of the day of the week
// Output: Sunday through Saturday
$dayOfTheWeek = date('l');
// N is a ISO-8601 numeric representation of the day of the week (added in PHP 5.1.0)
// Output: 1 (for Monday) through 7 (for Sunday)
if($numOfTheWeek < 6) { // 5 is Friday
// Alternate : if($numOfTheWeek < 6 ) { // before Saturday // $numOfTheWeek <= 4 ) { // 5 is Friday
	$countdown = 6 - $numOfTheWeek;
	// Since the weekend starts Saturday not Sunday subtract the current number of the week from 6
	echo
	"It's $dayOfTheWeek meaning you have $countdown days until the weekend!";
}
else{
//	echo "It's $dayOfTheWeek! Enjoy your weekend!";

echo "<h1>Padapaaaaaaaaaa, bijna weeekeeendddd..</h1>";

};

?>

