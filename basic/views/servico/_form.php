<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Servico $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="servico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'logradouro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'localidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomeLogradouro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numeroCasa')->textInput() ?>

    <?= $form->field($model, 'pontoReferencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipoServico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomeCompleto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comentarioSobreServico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataSolicitacao')->textInput() ?>

    <?= $form->field($model, 'dataAtendimento')->textInput() ?>

    <?= $form->field($model, 'numProtocolo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deletedDate')->textInput() ?>

    <?= $form->field($model, 'createdAt')->textInput() ?>

    <?= $form->field($model, 'updatedAt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>