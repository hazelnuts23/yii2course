<?php
$username = "superadmin";
$usertype = "admin";

switch ($usertype) {
    case $usertype == "user":
        echo "Welcome " . $username . ". Your User Type is User";
        break;
    default:
        echo "Welcome " . $username . ". Your User Type is Admin";
        break;
}
?>