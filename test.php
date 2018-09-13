<?php

include "Notification.php";
include "Register.php";
include "Email.php";

$email = new Email();

$register = new Register($email);
$register->doRegister();
