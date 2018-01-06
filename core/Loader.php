<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 2018/1/7
 * Time: 07:47
 */

namespace core;

class Loader
{
    static function autoload($class_name){
        $file =  str_replace("\\","/",$class_name) . '.php';
        include $file;
    }
}