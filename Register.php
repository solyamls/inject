<?php

class Register
{
    private $_method;

    public function __construct(Notification $notification)
    {
        $this->_method = $notification;
    }

    public function doRegister()
    {
        $this->_method->send();
    }
}