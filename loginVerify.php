<?php

//Starts session
session_start();

require_once('Config.php');
//Open conenction to out database useing the config file
$link = f_sqlConnect (DB_USER, DB_PASSWORD, DB_NAME);

//Clean out POST to prevent attacks
$_POST = f_clean($_POST);

//Retreave the information from POST
$name = $_POST['postname'];
$pass = $_POST['postpass'];

$match = 0; //0 means there is no match, 1 means there is a match

//look for username and password combination in database table
$sql = "SELECT * FROM `first` WHERE `username` = '$name' AND `password` = '$pass'";

$results = mysql_query($sql);
if(!$results) {
    die('Invalid query: ' . mysql_error());
}

//if there is something that is returned (there is a user with the username already)
if($result = mysql_fetch_array($results)) {
    //set match to 1 (found a valid user)
    $match = 1;
    //store username that was matched in session (session variable = database column name)
    $_SESSION["user_name"] = $result['username'];
    $_SESSION["pass_word"] = $result['password'];
    $_SESSION["pin"] = $result['pin'];
    $_SESSION["phone_number"] = $result['phonenumber'];
    $_SESSION["address"] = $result['address'];
    $_SESSION["bio"] = $result['bio'];
    $_SESSION["extra_1"] = $result['extra1'];
    $_SESSION["activation"] = $result['activation'];
    $_SESSION["permissions"] = $result['permissions'];
    $_SESSION["creation_time"] = $result['creationtime'];

}

echo $match;

?>