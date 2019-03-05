<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Carga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idCarga')->textInput() ?>

    <?= $form->field($model, 'FechaLimite')->textInput() ?>

    <?= $form->field($model, 'ValorOfertado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Contenido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Peso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Empresa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
