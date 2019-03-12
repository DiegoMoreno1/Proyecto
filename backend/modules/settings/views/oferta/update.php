<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\settings\models\oferta */

$this->title = 'Update Oferta: ' . $model->idOferta;
$this->params['breadcrumbs'][] = ['label' => 'Ofertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idOferta, 'url' => ['view', 'id' => $model->idOferta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oferta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
