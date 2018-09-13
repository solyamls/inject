<?php

//引入顺序不能颠倒
include "Notification.php";

include "Register.php";

include "Email.php"; //实现Notification接口



$email = new Email();

$register = new Register($email);
$register->doRegister();



