<?php

namespace ispomazkin\chevrolet;

use Yii;
use yii\base\BootstrapInterface;
use app\components\Helper;





class Bootstrap implements BootstrapInterface{

    //Метод, который вызывается автоматически при каждом запросе
    public function bootstrap($app)
    {

        $routes = require 'Routes.php';
        //Правила маршрутизации
        $app->getUrlManager()->addRules($routes);

    }
}