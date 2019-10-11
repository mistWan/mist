<?php

namespace mist;

class Bootstrap
{
    public function run()
    {
        $this->parseRoute();
    }

    private function parseRoute()
    {
//        d($_GET);
        if ($path = $_GET['s']) {
            [$module, $class, $action] = explode('/', $path);
            $className = 'app\\' . $module .  '\controller\\' . $class;
            $actionName = ucfirst($action);
            unset($_GET['s']);
            echo (new $className)->$actionName();
        }
    }
}