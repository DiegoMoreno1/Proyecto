<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Oferta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oferta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Fecha')->textInput(['placeholder' => "Ingrese la fecha"],['maxlength' => true]) ?>

    <?= $form->field($model, 'Valorpropuesta')->textInput(['placeholder' => "Ingrese el valor de su propuesta"],['maxlength' => true]) ?>

    <?= $form->field($model, 'Vehiculo')->textInput(['placeholder' => "Ingrese el codigo de su vehiculo"]) ?>

    <?= $form->field($model, 'Carga')->textInput(['placeholder' => "Ingrese el contenido de la carga"]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
