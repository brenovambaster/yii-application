<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Servico $model */

$this->title = 'Update Servico: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Servicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="servico-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <h3>Time Zone <?= date_default_timezone_get(); ?>  </h3>

    <?= $this->render('_form', [
        'model' => $model,
        'action' => 'update',
    ]) ?>

</div>
