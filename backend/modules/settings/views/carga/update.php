<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\settings\models\Carga */

$this->title = 'Update Carga: ' . $model->idCarga;
$this->params['breadcrumbs'][] = ['label' => 'Cargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idCarga, 'url' => ['view', 'id' => $model->idCarga]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
