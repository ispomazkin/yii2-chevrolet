yii2-chevrolet
=================



Установка
------------------
* Установка пакета с помощью Composer
```
composer require ispomazkin/yii2-chevrolet
```


В конфигурации добавить параметры
    'modules' => [
        ......
        'chevrolet'=>[
            'class'=>'\ispomazkin\chevrolet\Module',
            'host'=>'http://149.154.64.192',
            'image_path'=>'/img/img_chevrolet',
            'search_pattern'=>'http://site.com/search/?article={article}&brand=chevrolet'
        ],
        ........
    ],

Строка поиска может быть любая, вместо паттерна {article}
будет подставляться артикул

