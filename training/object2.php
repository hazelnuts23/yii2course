<?php
class Training {
    function getUser($username, $usertype) {

        if($usertype == "user"){
            return "Welcome ".$username.". Your User Type is User";
        }else{
            return "Welcome ".$username.". Your User Type is Admin";
        }
    }
    function getCGPA($cgpa) {
        $name = "Mohd Syafiq";
        $course = "Bachelor in Science Computer (Software Engineering)";
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
            return "Please Enter the correct CGPA";
        } else {
            return "Welcome " . $name . ". You have enroll " . $course . ". Based on your CGPA (" . $cgpa . "), your grade is " . $grade;
        }
    }
    function calculateGSTService($item1, $item2, $gst, $service){
        $grandtotal = ($item1+$item2)+(($item1+$item2) * ($gst+$service));
        return $grandtotal;
    }
}

// create an object
$train = new Training;

// show object properties
echo $train->getUser("superadmin", "user").'<br/>';
echo $train->getCGPA(3.0).'<br/>';

echo $train->calculateGSTService(1000.00, 5000.00, 0.06, 0.10);
?>