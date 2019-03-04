<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Transportador */

$this->title = 'Create Transportador';
$this->params['breadcrumbs'][] = ['label' => 'Transportadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transportador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
