<?php
/**
 * 配置文件
 */

return [
    // 数据库类型
    'type' => 'mysql',
    // 服务器地址
    'hostname' => '127.0.0.1',
    // 数据库名
    'database' => 'shopxo',
    // 用户名
    'username' => 'root',
    // 密码
    'password' => 'root',
    // 端口
    'hostport' => '3306',
    // 数据库编码默认采用utf8
    'charset' => 'utf8',
    // 数据库表前缀
    'prefix' => 's_',
    //#COOKIE_PREFIX#
    "authcode" => '3WpL6SOZ8s5r1poMQc',
    // 数据库调试模式
    'debug' => true,
    // 自动写入时间戳字段
    'auto_timestamp' => false,
    // 时间字段取出后的默认时间格式
    'datetime_format' => 'Y-m-d H:i:s',
    // 是否需要进行SQL性能分析
    'sql_explain' => false,
];
