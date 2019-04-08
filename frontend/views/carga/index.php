<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CargaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cargas';
$this->params['breadcrumbs'][] = $this->title;
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<div class="wrapper row3">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    Te intereza alguna carga ? <br>
    Puedes ofertarla registrandote en la pagina principal.<br>
    Para ver los datos de la empresa tambien tienes que registrarte.
    </p>
<strong>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            //'idCarga',
            'FechaLimite',
            'ValorOfertado',
            'Contenido',
            'Peso',
            //'Empresa',

            
        ],
    ]); ?></strong>
</div>
