<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\settings\models\oferta */

$this->title = 'Create Oferta';
$this->params['breadcrumbs'][] = ['label' => 'Ofertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oferta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
