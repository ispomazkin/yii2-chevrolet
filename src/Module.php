<?php

namespace ispomazkin\chevrolet;

use yii\base\Module as BaseModule;



class Module extends BaseModule
{
    /**
     * @var string
     * Хост для обращениий к АПИ и Картинкам
     */
    public $host;

    /**
     * @var string
     * Адрес папки с картинками на хосте
     */
    public $image_path;

    /**
     * @var string
     * поисковый шаблон
     */
    public $search_pattern;

    /**
     * @var string
     * Базовый путь к каталогу
     */
    public $base_url='/chevrolet';
    


    public $controllerNamespace = 'ispomazkin\chevrolet\controllers';

}
