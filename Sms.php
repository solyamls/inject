<?php
//短信发送接口
class Sms implements Notification

{
    public function send(){
        echo "短信发送";
    }
}