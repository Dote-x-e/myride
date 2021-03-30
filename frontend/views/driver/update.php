<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Driver */

$this->title = 'Update Driver: ' . $model->driverId;
$this->params['breadcrumbs'][] = ['label' => 'Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->driverId, 'url' => ['view', 'id' => $model->driverId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="driver-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
