<?php
session_start();
$email ="hello@gmail";
$password = 123456;

$_SESSION['email'] = $email;
$_SESSION['password'] = $password;