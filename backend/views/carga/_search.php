<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CargaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carga-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idCarga') ?>

    <?= $form->field($model, 'FechaLimite') ?>

    <?= $form->field($model, 'ValorOfertado') ?>

    <?= $form->field($model, 'Contenido') ?>

    <?= $form->field($model, 'Peso') ?>

    <?php // echo $form->field($model, 'Empresa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
