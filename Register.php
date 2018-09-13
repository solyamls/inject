<?php

class Register
{
    private $_method;

    //注入Notification接口
    public function __construct(Notification $notification)
    {
        $this->_method = $notification;
    }

    public function doRegister()
    {
        $this->_method->send();
    }
}