<?php
$nameERR = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
if ($_SERVER ["REQUEST METHOD"]) == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "name is required";
    } else {
        $name = test_input ($_POST["email"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "email is required";
    } else {
        $email = test_input ($_POST["email"]);
}