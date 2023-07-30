<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<p>Você enviou as seguintes informações:</p>

<ul>
    <li><label>Nome</label>: <?= Html::encode($model->nome) ?></li>
    <li><label>E-mail</label>: <a href=""> <?= Html::encode($model->e_mail) ?> </a></li>
    <li><label for=""> Senha: <?= Html::encode($model->senha) ?></label></li>
    <li><label for=""> Data nascimento: <?= Html::encode($model->data) ?></label></li>
    <li><label for=""> Sexo: <?= Html::encode($model->sexo) ?></label></li>
    <li><label for=""> Teste: <?= Html::encode($model->teste) ?></label></li>
</ul>
<?php $form = ActiveForm::begin(
    [
        'method' => 'post',
        'action' => ['teste'],
    ],
); ?>
<?= $form->field($model, 'nome') ?>
<?= $form->field($model, 'e_mail') ?>
<?= $form->field($model, 'senha') ?>
<?= $form->field($model, 'data') ?>
<?= $form->field($model, 'sexo') ?>
<?= $form->field($model, 'teste') ?>
<div class="form-group">
    <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
</div>
<?php ActiveForm::end(); ?>