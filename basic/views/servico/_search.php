<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ServicoSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="servico-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'logradouro') ?>

    <?= $form->field($model, 'localidade') ?>

    <?= $form->field($model, 'nomeLogradouro') ?>

    <?= $form->field($model, 'numeroCasa') ?>

    <?php // echo $form->field($model, 'pontoReferencia') ?>

    <?php // echo $form->field($model, 'tipoServico') ?>

    <?php // echo $form->field($model, 'nomeCompleto') ?>

    <?php // echo $form->field($model, 'telefone') ?>

    <?php // echo $form->field($model, 'comentarioSobreServico') ?>

    <?php // echo $form->field($model, 'dataSolicitacao') ?>

    <?php // echo $form->field($model, 'dataAtendimento') ?>

    <?php // echo $form->field($model, 'numProtocolo') ?>

    <?php // echo $form->field($model, 'deletedDate') ?>

    <?php // echo $form->field($model, 'createdAt') ?>

    <?php // echo $form->field($model, 'updatedAt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
