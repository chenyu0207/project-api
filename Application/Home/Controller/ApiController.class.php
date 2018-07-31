<?php
namespace Home\Controller;
use Think\Controller;

class ApiController extends Controller
{
    public function __construct()
    {
        //跨域
        header("Access-Control-Allow-Origin: *");
        header('Content-Type: text/html; charset=utf-8');
    }
    public function index()
    {
        $ApiLogic = D('Api', 'Logic');
        $return = $ApiLogic->login();
        echo 1212323123;
    }
}