<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Vehiculo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehiculo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Placa')->textInput(['placeholder' => "Ingrese la placa de su vehiculo"],['maxlength' => true]) ?>

    <?= $form->field($model, 'Marca')->textInput(['placeholder' => "Ingrese la marca de su vehiculo"],['maxlength' => true]) ?>

    <?= $form->field($model, 'PSoat')->textInput(['placeholder' => "Posee Soat ?"],['maxlength' => true]) ?>

    <?= $form->field($model, 'PMarca')->textInput(['placeholder' => "Posee Registro Tecnico Mecanica ?"],['maxlength' => true]) ?>

    <?= $form->field($model, 'Transportador')->textInput(['placeholder' => "Ingrese su transportador"]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
