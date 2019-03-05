<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Oferta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oferta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idOferta')->textInput() ?>

    <?= $form->field($model, 'Fecha')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Valorpropuesta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Vehiculo')->textInput() ?>

    <?= $form->field($model, 'Carga')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
