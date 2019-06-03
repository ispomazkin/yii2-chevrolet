<?php

namespace ispomazkin\chevrolet;

use Yii;
use yii\base\BootstrapInterface;
use app\components\Helper;





class Bootstrap implements BootstrapInterface{

    //Метод, который вызывается автоматически при каждом запросе
    public function bootstrap($app)
    {

        $module = $app->getModule('chevrolet');
        /* @var $module \ispomazkin\chevrolet\Module */

        $routes = require 'Routes.php';
        //Правила маршрутизации
        $app->getUrlManager()->addRules($routes, false);

        //для совместимости с проектом zp24.shop
        $app->params['relative'] = false;

    }
}