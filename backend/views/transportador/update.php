<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Transportador */

$this->title = 'Actualizar Transportador: ' . $model->idTransportador;
$this->params['breadcrumbs'][] = ['label' => 'Transportadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idTransportador, 'url' => ['view', 'id' => $model->idTransportador]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transportador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
