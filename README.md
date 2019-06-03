yii2-chevrolet
=================



Установка
------------------
* Установка пакета с помощью Composer
```
composer require ispomazkin/yii2-chevrolet
```


В конфигурации common/config/main-local.php добавить параметры. 
    'modules' => [
        ......
        'chevrolet'=>[
            'class'=>'\ispomazkin\chevrolet\Module',
            'host'=>'http://149.154.64.192',
            'image_path'=>'/img/img_chevrolet',
            'search_pattern'=>'http://site.com/search/?article={article}&brand=chevrolet',
            'base_url'=>'/chevrolet'
        ],
        ........
    ],

Строка поиска может быть любая, вместо паттерна {article} будет подставляться артикул.
После установки и настройки каталог будет доступен по адресу /chevrolet
