<?php

//index模块的配置，只对index模块下的控制器有效
return[
    
    
    'cache' => [
        //驱动方式
        'type' => 'redis',
        //服务器地址
        'host' => '127.0.0.1',
        //redis端口号
        'port'=>'6379',
    ],
];
