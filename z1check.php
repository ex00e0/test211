<?php
$date = isset($_POST['date'])?$_POST['date']:false;
$userDay = substr($date, 8, 2);
$userMonth = substr($date, 5, 2);
$userYear = substr($date, 0, 4);
$date .= ' 00:00:00';
$timestampUser = strtotime($date);
echo $timestampUser;
$today = date('Y-m-d');
$todayDay = substr($today, 8, 2);
$todayMonth = substr($today, 5, 2);
$todayYear = substr($today, 0, 4);

try {if ($todayYear < $userYear) {throw new Exception("Ты еще не родился!");}
        else if ($todayYear==$userYear) {if ($todayMonth < $userMonth) {throw new Exception("Ты еще не родился!");}
                                        else if ($todayMonth==$userMonth) {if ($todayDay < $userDay) {throw new Exception("Ты еще не родился!");} } }
     if (time()-567648000 <= $timestampUser) {throw new Exception("Вам нет 18!");} }
catch (Exception $e) {echo $e->getMessage();
                      die();}
?>