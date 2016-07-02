<?php
/**
 * Created by PhpStorm.
 * User: zhaoye
 * Date: 16/6/30
 * Time: 上午8:59
 */

namespace App\Library;

abstract class Library{
    static public function abcd(){
        return 'abcd';
    }

    //读取缓存
    static function cache($name, $value='', $expire=3600, $cache_load = 'master'){
        static $cache = null;
        if (empty($cache)) {
            $cache = Swoole::getInstance()->cache($cache_load);
        }
        if(''=== $value){ // 获取缓存
            return $cache->get($name);
        }elseif(is_null($value)) { // 删除缓存
            return $cache->delete($name);
        }else { // 缓存数据
            return $cache->set($name, $value, $expire);
        }
    }
}


