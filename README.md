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
        'chevrolet'=>[
            'class'=>'\ispomazkin\chevrolet\Module',
            'host'=>'http://149.154.64.192',
            'image_path'=>'/img/img_chevrolet',
            'search_pattern'=>'http://site.com/search/?article={article}&brand=chevrolet',
            'base_url'=>'/chevrolet'
        ],
    ],

Строка поиска может быть любая, вместо паттерна {article} будет подставляться артикул.
После установки и настройки каталог будет доступен по адресу /chevrolet

Чтобы задать собственные шаблон генерации title, keywords, description,
используются предустановленные шаблоны переменные {model},{year},{group},{subgroup},{parts} 

        'chevrolet'=>[
            'class'=>'\ispomazkin\chevrolet\Module',
            'host'=>'http://149.154.64.192',
            'image_path'=>'/img/img_chevrolet',
            'search_pattern'=>'http://site.com/search/?article={article}&brand=chevrolet',
            'base_url'=>'/chevrolet',
            'titlePattern=>[
                  'years'=>'Запчасти Шевроле',
                  'categories'=>'{model} {year}',
                  'groups'=>'{category}',
                  'sub-groups'=>'{group}',
                  'parts'=>'{parts}'
            ],
            'descriptionPattern'=>[
                    'years'=>'Каталог запчастей Шевроле',
                    'categories'=>'Каталог запчастей Шевроле {model} {year}',
                    'groups'=>'Каталог запчастей Шевроле {model} {year} по категории {category}',
                    'sub-groups'=>'Каталог запчастей Шевроле {model} {year} {category} Группа {group}',
                    'parts'=>'Каталог запчастей Шевроле {model} {year} {category} {group} {parts}'
            ],
            'keywordsPattern'=>[
                    'years'=>'EPC chevrolet',
                    'categories'=>'{model} {year}',
                    'groups'=>'{model} {year} {group}',
                    'sub-groups'=>'{subgroup}',
                    'parts'=>'{parts}'
            ],
        ],
        
