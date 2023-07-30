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

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
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