<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Passenger */

$this->title = 'Update Passenger: ' . $model->passengerId;
$this->params['breadcrumbs'][] = ['label' => 'Passengers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->passengerId, 'url' => ['view', 'id' => $model->passengerId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="passenger-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
