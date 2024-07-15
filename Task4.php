<?php
$day=date('l');
echo "<h2>welcome $day . <br>";

$grade = 45;
$res1 = "";
switch($grade){
    case ($grade > 0 && $grade < 50):
        $res1 = "Failed";break;
    case ($grade > 0 && $grade < 50):
        $res="Good";break;
    case ($grade >= 65 && $grade <90):
        $res1 = "Very good";break;
    case ($grade>=90):
        $res1 = "Excellent";
        break;
    default 
    $res1 = "your grade is not defined";

}
echo $res1;
?>