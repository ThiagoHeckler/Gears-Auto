<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pecas $model */

$this->title = 'Update Pecas: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pecas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pecas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
