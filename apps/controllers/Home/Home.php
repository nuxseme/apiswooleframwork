<?php
namespace App\Controller\Home;

use App\Api;
use App\Library\Library;
use Swoole\Controller;

class Home extends Controller
{

    function index()
    {

        return phpinfo();
    }
}