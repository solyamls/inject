<?php
//邮件
class Email implements Notification
{
    public function send(){

        echo "邮件发送";
    }
}