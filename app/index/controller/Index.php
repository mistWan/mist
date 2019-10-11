<?php

namespace app\index\controller;

use mist\View;

class Index
{

    public function index()
    {
        echo __METHOD__;
    }

    public function show()
    {
        return array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x','y','z'));
    }

    public function param()
    {
        d($_GET);
        d($_POST);
    }

    public function view()
    {
        return (new View())->display('index/index')->assign('key', 'value');
    }
}