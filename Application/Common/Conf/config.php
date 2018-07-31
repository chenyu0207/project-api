<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

/**
 * 系统配文件
 * 所有系统级别的配置
 */
return array(
    /* 模块相关配置 */
    'AUTOLOAD_NAMESPACE' => array('Addons' => ONETHINK_ADDON_PATH), //扩展模块列表
    'DEFAULT_MODULE'     => 'Home',
    'MODULE_DENY_LIST'   => array('Common', 'Api'),
    'MODULE_ALLOW_LIST'  => array('Home'),

    /* 系统数据加密设置 */
    'DATA_AUTH_KEY' => 'xN(.0M:1XlZg/~)J&Fcy;kBAR^{%d=$4?qKh_"5>', //默认数据加密KEY

    /* 调试配置 */
    'SHOW_PAGE_TRACE' => false,

    /* 用户相关设置 */
    'USER_MAX_CACHE'     => 1000, //最大缓存用户数
    'USER_ADMINISTRATOR' => 1, //管理员用户ID

    /* URL配置 */
    'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL'            => 3, //URL模式
    'VAR_URL_PARAMS'       => '', // PATHINFO URL参数变量
    'URL_PATHINFO_DEPR'    => '/', //PATHINFO URL分割符


    /* 全局过滤配置 */
    'DEFAULT_FILTER' => '', //全局过滤函数
    //mark
    /* 数据库配置 */
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址//
    // 'DB_HOST'   => '127,=', // 服务器地址//
    'DB_NAME'   => 'test',//'shops',//'shop', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root',//'',//  // 密码
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => '', // 数据库表前缀

);