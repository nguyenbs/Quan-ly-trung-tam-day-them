<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Image */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Image',
]) . $model->id_image;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Images'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_image, 'url' => ['view', 'id' => $model->id_image]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="image-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
