<?php
/**
 * Created by PhpStorm.
 * User: pomazkinis
 * Date: 31.05.2019
 * Time: 9:01
 *
 * @var $this \yii\web\View
 * @var $data array
 * @var $img_path string
 * @var $search_pattern string
 */

use yii\helpers\Html;
use yii\helpers\Url;

$img_src = $img_path . '/' .  $data['parts'][0]['image'];
?>

<?=Html::tag('h1',$data['model'].' '.$data['year'])?>
<?=Html::tag('h2',$data['category'])?>
<?=Html::tag('h3',$data['group'])?>

<?php if(isset($data['subgroup'])):?>
    <?=Html::tag('h3',$data['subgroup'])?>
<?php endif;?>

<div class="wrapper">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <img src="<?=$img_src?>" class="img-fluid thumbnail" alt="">
        </div>
    </div>
    <h2>Список запчастей</h2>
    <table class="table table-responsive table-bordered">
        <tr>
            <th>Позиция</th>
            <th>Артикул</th>
            <th>Описание</th>
            <th>Применение</th>
            <th>Период</th>
            <th>Количество</th>
            <th>Примечание</th>
        </tr>
        <?php foreach($data['parts'] as $part):?>
            <tr>
                <td><?=$part['pic']?></td>
                <td><?=$this->render('_article',['article'=>$part['article'],'search_pattern'=>$search_pattern])?></td>
                <td><?=$part['type']?></td>
                <td><?=$this->render('_description_parts',['text'=>$part['description'],'codes'=>$part['codes']])?></td>
                <td><?=$part['year']?></td>
                <td><?=$part['qty']?></td>
                <td><?=$part['comment']?></td>
            </tr>
        <?php endforeach?>
    </table>
</div>


