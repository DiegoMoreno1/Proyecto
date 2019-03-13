<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Carga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FechaLimite')->textInput(['placeholder' => "Ingrese la fecha limite"]) ?>

    <?= $form->field($model, 'ValorOfertado')->textInput(['placeholder' => "Ingrese el valor que desea ofertar"],['maxlength' => true]) ?>

    <?= $form->field($model, 'Contenido')->textInput(['placeholder' => "Ingrese el  contenido"],['maxlength' => true]) ?>

    <?= $form->field($model, 'Peso')->textInput(['placeholder' => "Ingrese el peso de la carga"],['maxlength' => true]) ?>

    <?= $form->field($model, 'Empresa')->textInput(['placeholder' => "Ingrese el codigo de su empresa"]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
