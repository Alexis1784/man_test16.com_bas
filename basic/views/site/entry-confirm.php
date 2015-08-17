<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17.08.15
 * Time: 12:15
 */
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name)?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
