<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\settings\models\ofertaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oferta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idOferta') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'Valorpropuesta') ?>

    <?= $form->field($model, 'Vehiculo') ?>

    <?= $form->field($model, 'Carga') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Cancelar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
