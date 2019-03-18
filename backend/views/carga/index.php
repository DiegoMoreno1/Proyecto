<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CargaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cargas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carga-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Carga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idCarga',
            'FechaLimite',
            'ValorOfertado',
            'Contenido',
            'Peso',
            'Origen',
            'Destino',
            'Empresa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
