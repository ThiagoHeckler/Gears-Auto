<?php 
use yii\helpers\Html;
use yii\helpers\Url;

/** @var $pecas app\models\Pecas[] */

$this->title = 'Catálogo de Peças';
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="row">
    <?php foreach ($pecas as $peca): ?>
        <div class="col-md-4" style="border:1px solid #ccc; padding:10px; margin:10px;">
            <h3><?= Html::encode($peca->nome) ?></h3>
            <p><strong>Preço:</strong> R$ <?= number_format($peca->preco, 2, ',', '.') ?></p>
            <p><?= Html::encode($peca->descricao) ?></p>
            <p><?= Html::a('Adicionar ao Carrinho', ['pecas/add-carrinho', 'id' => $peca->id], ['class' => 'btn btn-primary']) ?></p>
        </div>
</div>
<?php endforeach; ?>
</div>