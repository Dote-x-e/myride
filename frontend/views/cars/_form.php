<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cars */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cars-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'carType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numberPlate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'engineCapacity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numberOfSeats')->textInput() ?>

    <?= $form->field($model, 'logbookNumber')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
