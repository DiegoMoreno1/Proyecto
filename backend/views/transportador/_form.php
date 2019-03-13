<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Transportador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transportador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Documento')->textInput(['placeholder' => "Ingrese su Documento de identidad"]) ?>

    <?= $form->field($model, 'Nombres')->textInput(['placeholder' => "Ingrese sus Nombre"],['maxlength' => true]) ?>

    <?= $form->field($model, 'Apellidos')->textInput(['placeholder' => "Ingrese sus Apellidos "],['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefono')->textInput(['placeholder' => "Ingrese su Telefono"]) ?>

    <?= $form->field($model, 'Correo')->textInput(['placeholder' => "Ingrese su Correo"],['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
