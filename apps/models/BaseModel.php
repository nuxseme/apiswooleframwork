<?php
/**
 * Created by PhpStorm.
 * User: zhaoye
 * Date: 16/7/1
 * Time: 上午9:48
 */


namespace App\Model;



use Swoole\Model;

abstract  class BaseModel extends Model{
    protected $table_name = '';
    function __construct(){

    }

}