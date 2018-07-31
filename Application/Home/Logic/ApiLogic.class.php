<?php

namespace Home\Logic;
use Think\Model;



class ApiLogic
{
    public function login()
    {
        $return = M('test')->select();
        var_dump($return);
    }
}