<?php
$username = "superadmin";
$usertype = "admin";

if($usertype == "user"){
    echo "Welcome ".$username.". Your User Type is User";
}else{
    echo "Welcome ".$username.". Your User Type is Admin";
}
?>