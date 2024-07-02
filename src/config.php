<?php
return [
    'stub_path'     => false,       //模板路径 复制src/stubs/ 下的模板并修改为自己的模板

    'model' => [
        'delete_filed' => 'delete_time',
        'create_field' => 'create_time',
        'update_field' => 'update_time',
        'auto_timestamp' => 'int',
    ],
    'service' => [
        'admin_event' => false,     //admin操作事件，默认关闭（待开发公用版本）
    ],
    'response_code' => [
        'success' => 1000,
        'validate_error' => 1001,
        'not_login' => 1002,
        'method_error' => 1003,
        //自由拓展
    ]

];
