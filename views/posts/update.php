<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Posts $model */

$this->title = 'Update Posts: ' . $model->posts_id;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->posts_id, 'url' => ['view', 'posts_id' => $model->posts_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="posts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
