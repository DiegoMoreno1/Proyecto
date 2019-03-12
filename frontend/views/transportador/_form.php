<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Transportador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transportador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Documento')->textInput() ?>

    <?= $form->field($model, 'Nombres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Apellidos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefono')->textInput() ?>

    <?= $form->field($model, 'Correo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
