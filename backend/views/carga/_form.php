<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\Empresa;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model backend\models\Carga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carga-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'FechaLimite')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => false,
            'format' => 'yyyy-mm-dd'
        ]
]);?>


    <?= $form->field($model, 'ValorOfertado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Contenido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Peso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Origen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Destino')->textInput(['maxlength' => true]) ?>

    <?=  $form->field($model, 'Empresa')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Empresa::find()->all(), 'idEmpresa', 'Nombre'),
        'language' => 'es',
        'options' => ['placeholder' => 'Escoja la empresa '],
         'pluginOptions' => [
         'allowClear' => true
    ],
]); ?>
            </div>
    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
 

    <?php ActiveForm::end(); ?>

</div>
