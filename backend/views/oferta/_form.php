<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\Vehiculo;
use backend\models\Carga;
use yii\grid\GridView;
use backend\controllers\CargaController;
/* @var $this yii\web\View */
/* @var $model backend\models\Oferta */
/* @var $form yii\widgets\ActiveForm */
/* @var $searchModel backend\models\OfertaSearch */
/*@var $dataProvider yii\data\ActiveDataProvider*/
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
            'format' => 'yy-mm-dd'
        ]
]);?>

    <?= $form->field($model, 'Valorpropuesta')->textInput(['placeholder' => "Ingrese el valor de su propuesta"],['maxlength' => true]) ?>


   
        <?= $form->field($model, 'Vehiculo')->dropDownList(
            ArrayHelper::map(Vehiculo::find()->all(), 'idVehiculo', 'Placa'),
             ['prompt'=>'Seleccione un Vehiculo',
              
            ]); ?>
           
     
   
     <?= $form->field($model, 'Carga')->dropDownList(
            ArrayHelper::map(Carga::find()->all(), 'idCarga', 'Contenido'),
             ['prompt'=>'Seleccione una Carga',
              
            ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
