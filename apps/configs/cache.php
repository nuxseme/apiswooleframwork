<?php
$cache['master'] = array(
    'type' => 'Memcache',
    'use_memcached' => true, //使用memcached扩展
//    'compress' => true, //启用压缩
    'servers' => array(
        [
            'host' => '192.168.5.5',
            'port' => 11211,
            'weight' => 100,
            'persistent' => false,
        ],
    ),
);
return $cache;