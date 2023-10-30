<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\widgets\ActiveField;


?>
<?php
if (Yii::$app->session->hasFlash('success')) {
}
?>
<?php
$form = ActiveForm::begin();
?>

<?= $form->field($model, 'name'); ?>
<?= $form->field($model, 'email'); ?>

<?= Html::submitButton('Submit', ['class' => 'btn btn-primary']); ?>
<?php
$form = ActiveForm::end();
?>