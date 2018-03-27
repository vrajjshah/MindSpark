<?php 
$userTimezone = new DateTimeZone('America/New_York');
$gmtTimezone = new DateTimeZone('GMT');
$myDateTime = new DateTime('2016-03-21 13:14', $gmtTimezone);
$offset = $userTimezone->getOffset($myDateTime);
$myInterval=DateInterval::createFromDateString((string)$offset . 'seconds');
$myDateTime->add($myInterval);
$result = $myDateTime->format('Y-m-d H:i:s');
Echo $result; ?>