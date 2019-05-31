<?php
/**
 * Created by PhpStorm.
 * User: pomazkinis
 * Date: 31.05.2019
 * Time: 7:31
 *
 *
 * @var $this \yii\web\View
 * @var $data array
 * @var $img_path string
 */

use yii\helpers\Html;
use yii\helpers\Url;

$collection = isset($data['subgroups']) ? $data['subgroups'] :  $data['groups']
?>
<?=Html::tag('h1',$data['model'].' '.$data['year'])?>
<?=Html::tag('h2',$data['category'])?>
<?=Html::tag('h3',$data['group'])?>


<div class="container">
    <?php foreach($collection as $item):?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail">
                    <a href="<?=Url::to(['chevrolet/parts','year_url'=>$data['model_url'],'last_url'=>$item['url']])?>" class="thumbnail">
                        <img src="<?=$img_path .'/'. $item['image']?>" height="350px" class="rounded mx-auto d-block" title="<?=$item['description']?>" alt="<?=$data['group']?>">
                    </a>
                    <p><?=$item['description']?></p>
                </div>
            </div>
    <?php endforeach;?>
</div>
