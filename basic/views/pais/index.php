<?php

use app\models\Pais;
use yii\bootstrap5\LinkPager as Bootstrap5LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\grid\CheckboxColumn;
use yii\grid\DataColumn;

/** @var yii\web\View $this */
/** @var app\models\PaisSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pais-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar novo País', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?php
    Pjax::begin();
    ?>
    <?= GridView::widget([

        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'codigo',
            'nome',
            'populacao',
            [
                'class' => ActionColumn::className(),
                'header' => 'Ações',
                'urlCreator' => function ($action, Pais $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'codigo' => $model->codigo]);
                },
            ],
            [
                'class' => CheckboxColumn::class,
            ],
        ],
        'pager' => [
            'class' => Bootstrap5LinkPager::className(),
            'options' => [
                'class' => 'pagination justify-content-center',
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>
</div>