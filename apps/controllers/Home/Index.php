<?php
namespace App\Controller\Home;

use App\Api;
use App\Library\Help;
use Swoole\Controller;

class Index extends Controller
{

    function index(){

        $this->display();
    }
}