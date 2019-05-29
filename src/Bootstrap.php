<?php

namespace ispomazkin\chevrolet;

use Yii;
use yii\base\BootstrapInterface;
use app\components\Helper;





class Bootstrap implements BootstrapInterface{

    //Метод, который вызывается автоматически при каждом запросе
    public function bootstrap($app)
    {

        //Правила маршрутизации
        $app->getUrlManager()->addRules([
            'chevrolet' => 'chevrolet/test/index',
        ], true);

        /*
* Регистрация модуля в приложении
*   (вместо указания в файле frontend/config/main.php
*/
        $app->setModule('chevrolet', 'ispomazkin\chevrolet\Module');





    }
}