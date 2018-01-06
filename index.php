<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 2018/1/7
 * Time: 07:43
 */

define("BASE_DIR",__DIR__ . '/');


include "core/Loader.php";
spl_autoload_register("\\core\\Loader::autoload");


\controller\Hello::world();