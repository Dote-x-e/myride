<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Rider */

$this->title = 'Update Rider: ' . $model->riderId;
$this->params['breadcrumbs'][] = ['label' => 'Riders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->riderId, 'url' => ['view', 'id' => $model->riderId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rider-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
