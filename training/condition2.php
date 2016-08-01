<?php
$name = "Mohd Syafiq";
$course = "Bachelor in Science Computer (Software Engineering)";
$cgpa = 4.0;
if ($cgpa == 4.0) {
    $grade = "High Distinction";
} else if ($cgpa >= 3.33 && $cgpa <= 3.99) {
    $grade = "Distinction";
} else if ($cgpa >= 2.67 && $cgpa <= 3.32) {
    $grade = "Credit";
} else if ($cgpa >= 2.00 && $cgpa <= 2.66) {
    $grade = "Pass";
} else if ($cgpa <= 1.99) {
    $grade = "Failed";
} else {
    $grade = null;
}
if ($grade == null) {
    echo "Please Enter the correct CGPA";
} else {
    echo "Welcome " . $name . ". You have enroll " . $course . ". Based on your CGPA (" . $cgpa . "), your grade is " . $grade;
}
?>

