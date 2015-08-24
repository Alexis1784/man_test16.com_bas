<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24.08.15
 * Time: 15:39
 */
use yii\helpers\Html;
?>

<?=Html::encode($var_creating_in_action) ?>
<?= $this->render('mygreate_view_in_view') ?>
<?php echo \Yii::$app->view->renderFile('@app/views/country/mygreatexp_another_place.php')?>
