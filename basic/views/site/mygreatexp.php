<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17.08.15
 * Time: 18:24
 */
use yii\helpers\Html;
?>

<?= Html::encode($ssv) ?>
<?= $this->render('mygreate_view_in_view') ?>
<?= $this->render('\country\mygreatexp_another_place') ?>
