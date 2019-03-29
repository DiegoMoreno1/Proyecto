<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\OfertaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ofertas';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="oferta-index">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<div class="carga-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
       Tienes alguna carga ? <br>
       Si quieres ver los datos Completos acerca de estas propuestas <br>
       Puedes verlas registrandote a la aplicacion
    </p>
<strong>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           

            //'idOferta',
            'Fecha',
            'Valorpropuesta',
            //'Vehiculo',
            //'Carga',

            
        ],
    ]); ?>
    </strong>
</div>
