<?php
return array(
    /* 主题设置 */
    'DEFAULT_THEME' =>  'default',  // 默认模板主题名称

    /* 数据缓存设置 */
    'DATA_CACHE_PREFIX' => '', // 缓存前缀
    'DATA_CACHE_TYPE'   => 'File', // 数据缓存类型

    'URL_ROUTER_ON' => true,   // 是否开启URL路由
    'URL_ROUTE_RULES'=> [
        '/' => 'Home/index',
    ],

    //mark
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址//
    'DB_NAME'   => 'test',//'shop', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root',//'',//  // 密码
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => '', // 数据库表前缀
    //mark
);