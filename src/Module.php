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


    /**
     * @var array
     * Паттерн для вывода различного типа title на страницах
     * Доступны шаблоны
     * {model},{category},{group},{subgroup},{last}
     */
    public $titlePattern=[
        'years'=>'Запчасти Шевроле',
        'categories'=>'{model} {year}',
        'groups'=>'{category}',
        'sub-groups'=>'{group}',
        'parts'=>'{parts}'
    ];

    /**
     * @var array
     * Паттерн для вывода различного типа keywords на страницах
     * Доступны шаблоны
     * {model},{category},{group},{subgroup},{last}
     */
    public $kwdsPattern=[
        'years'=>'EPC chevrolet',
        'categories'=>'{model} {year}',
        'groups'=>'{model} {year} ',
        'sub-groups'=>'{group}',
        'parts'=>'{parts}'

    ];


    /**
     * @var array
     * Паттерн для вывода различного типа description на страницах
     * Доступны шаблоны
     * {model},{category},{group},{subgroup},{last}
     */
    public $descriptionPattern=[
        'years'=>'Каталог запчастей Шевроле',
        'categories'=>'Каталог запчастей Шевроле {model} {year}',
        'groups'=>'Каталог запчастей Шевроле {model} {year} по категории {category}',
        'sub-groups'=>'Каталог запчастей Шевроле {model} {year} {category} Группа {group}',
        'parts'=>'Каталог запчастей Шевроле {model} {year} {category} {group} {parts}'

    ];




    public $controllerNamespace = 'ispomazkin\chevrolet\controllers';

}
