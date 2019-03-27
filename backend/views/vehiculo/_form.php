<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Transportador;
use yii\helpers\ArrayHelper;
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

    
    <?= $form->field($model, 'Transportador')->dropDownList(
            ArrayHelper::map(Transportador::find()->all(), 'idTransportador', 'Nombres'),
             ['prompt'=>'Seleccione un transportador',
              
            ]); ?>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
