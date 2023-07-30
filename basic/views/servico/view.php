<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Servico $model */

$this->title = "Servico " . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Servicos', 'url' => ['index']];
$this->params['breadcrumbs'][] =   $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="servico-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem certeza de que deseja excluir esse  item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'logradouro',
            'localidade',
            'nomeLogradouro',
            'numeroCasa',
            'pontoReferencia',
            'tipoServico',
            'nomeCompleto',
            'telefone',
            'comentarioSobreServico',
            'dataSolicitacao',
            'dataAtendimento',
            'numProtocolo',
            'deletedDate',
            'createdAt',
            'updatedAt',
        ],
    ]) ?>

</div>