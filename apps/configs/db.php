<?php
$db['master'] = array(
//    'type'       => Swoole\Database::TYPE_PDO,
//    'host'       => "192.168.5.6",
//    'port'       => 3306,
//    'dbms'       => 'mongo',
////    'engine'     => 'MyISAM',
//    'user'       => "",
//    'passwd'     => "",
//    'name'       => "ChineseBasicTest",
//    'charset'    => "utf8",
//    'setname'    => true,
//    'persistent' => false, //MySQL长连接
//    'use_proxy'  => false,  //启动读写分离Proxy

    'type'       => Swoole\Database::TYPE_PDO,
    'host'       => "120.27.143.217",
    'port'       => 3306,
    'dbms'       => 'mysql',
//    'engine'     => 'MyISAM',
    'user'       => "jeekzx",
    'passwd'     => "7f331f",
    'name'       => "jeekzx",
    'charset'    => "utf8",
    'setname'    => true,
    'persistent' => false, //MySQL长连接
    'use_proxy'  => false,  //启动读写分离Proxy
    'slaves'     => array(
        array('host' => '127.0.0.1', 'port' => '3307', 'weight' => 100,),
        array('host' => '127.0.0.1', 'port' => '3308', 'weight' => 99,),
        array('host' => '127.0.0.1', 'port' => '3309', 'weight' => 98,),
    ),
);

$db['slave'] = array(
    'type'       => Swoole\Database::TYPE_MYSQLi,
    'host'       => "127.0.0.1",
    'port'       => 3306,
    'dbms'       => 'mysql',
    'engine'     => 'MyISAM',
    'user'       => "root",
    'passwd'     => "root",
    'name'       => "live",
    'charset'    => "utf8",
    'setname'    => true,
    'persistent' => false, //MySQL长连接
);

return $db;