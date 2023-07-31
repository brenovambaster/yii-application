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

    // TODO: QUERO QUE ESSE CAMPO ETEJA DESABILITADO QUANDO O SCENARIO FOR CREATE
    // TODO: ESTUDAR SOBRE SCENARIOS; ALTERAR O SCENARIO NO CONTROLLER PARA QUE QUANDO FOR UPDATE ELE HABILITE O CAMPO,
    // ALÉM DISSO, QUANDO A RESPOSTA DESSE CAMPO FOR SIM, ELE DEVE SALVAR A DATA ATUAL NO CAMPO dataAtendimento
    <?= $form->field($model, 'dataAtendimento')->label('Foi antendido?')
        ->radioList(['1' => 'Sim', '0' => 'Não']); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>