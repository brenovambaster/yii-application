<?php

use app\models\Servico;
use app\widgets\Imprimir;
use yii\bootstrap5\LinkPager as Bootstrap5LinkPager;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;


/** @var yii\web\View $this */
/** @var app\models\ServicoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Servicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servico-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nova solicitaão de  servico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    //echo $this->render('_search', ['model' => $searchModel]);
    echo Imprimir::widget();
    echo Html::a('Limpar Filtros', ['index'], ['class' => ' m-2 btn btn-danger float-end']);
    ?>


    <?=
    /**
     * Displays a single Servico model.
     * @param integer $id
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     * @doc https://www.yiiframework.com/doc/api/2.0/yii-grid-gridview
     */

    GridView::widget([
        'summary' => 'Mostrando <b>{begin}-{end}</b> de <b>{totalCount}</b> itens',
        'summaryOptions' => ['class' => 'text fw-item'],
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'emptyText' => 'Nenhum registro encontrado',
        'emptyTextOptions' => ['class' => 'text-danger fw-bold'],
        'caption' => 'Lista de Serviços',

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'numProtocolo',
            'localidade',
            'logradouro',
            'nomeLogradouro',
            'numeroCasa',
            [
                'attribute' => 'createdAt',
                /*'format' => ['date', 'php:d/m/Y H:i:s'] ou 'format' =>['date', 'php:d/m/Y']*/
                'label' => 'Data de Criação',
            ],
            'dataAtendimento',
            [
                'class' => ActionColumn::className(),
                'header' => 'Ações',
                'urlCreator' => function ($action, Servico $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                },
            ],
        ],
        'pager' => [
            'class' => Bootstrap5LinkPager::className(),
            'options' => [
                'class' => 'pagination justify-content-center',
            ],
        ],
    ]);
    ?>

</div>