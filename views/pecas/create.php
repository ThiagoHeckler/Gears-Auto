<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pecas $model */

$this->title = 'Create Pecas';
$this->params['breadcrumbs'][] = ['label' => 'Pecas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pecas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
