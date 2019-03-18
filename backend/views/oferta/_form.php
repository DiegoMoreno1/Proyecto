<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Oferta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oferta-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'Fecha')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => false,
            'format' => 'yy-m-d'
        ]
]);?>

    <?= $form->field($model, 'Valorpropuesta')->textInput(['placeholder' => "Ingrese el valor de su propuesta"],['maxlength' => true]) ?>

    <?= $form->field($model, 'Vehiculo')->textInput(['placeholder' => "Ingrese el codigo de su vehiculo"]) ?>

    <?= $form->field($model, 'Carga')->textInput(['placeholder' => "Ingrese el contenido de la carga"]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
