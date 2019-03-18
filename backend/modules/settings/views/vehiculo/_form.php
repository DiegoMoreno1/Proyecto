<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\settings\models\vehiculo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehiculo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idVehiculo')->textInput() ?>

    <?= $form->field($model, 'Placa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PSoat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PMarca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Transportador')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
