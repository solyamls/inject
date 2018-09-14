<?php

function test($country,$city){
    $func = function($name,$age) use ($country,$city){

        echo "我的国家是$country,我的城市是$city,我的名字是$name,我的年龄是$age";
    };
    $func('马云',48);
}

test('中国','杭州');