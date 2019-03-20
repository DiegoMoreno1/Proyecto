<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Carga */

$this->title = 'Crear Carga';
$this->params['breadcrumbs'][] = ['label' => 'Cargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
