<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Empresa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empresa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textInput(['placeholder' => "Ingrese el nombre de la empresa"],['maxlength' => true]) ?>

    <?= $form->field($model, 'Rsocial')->textInput(['placeholder' => "Ingrese la razón social"],['maxlength' => true]) ?>

    <?= $form->field($model, 'NombreR')->textInput(['placeholder' => "Ingrese el nombre"],['maxlength' => true]) ?>

    <?= $form->field($model, 'TelefonoContacto')->textInput(['placeholder' => "Ingrese el telefono de contacto"],['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['placeholder' => "Ingrese el Email de la empresa"],['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
