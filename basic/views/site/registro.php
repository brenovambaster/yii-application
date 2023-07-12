<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
// atributos do formulário
$config = [
    'options' => [
        'class' => 'form-group needs-validation',
        'novalidate' => ''
    ],
    'errorCssClass' => 'text-danger'
];

?>
<div class="container">
    <h1 class="text-center">Formulário de Registro</h1>
    <?php $form = ActiveForm::begin($config); ?>
    <?= $form->field($model, 'nome'); ?>
    <?= $form->field($model, 'e_mail'); ?>
    <?= $form->field($model, 'senha')->passwordInput(); ?>
    <?= $form->field($model, 'data')->input('date', [
        'options' => [
            'class' => 'form-control',
        ]
    ]);
    ?>
    <?= $form->field($model, 'sexo')->radioList(
        [
            'M' => 'Masculino',
            'F' => 'Feminino',
            'O' => 'Outro'
        ]
    ); ?>
    <?= $form->field($model, 'teste')->dropDownList([
        'op1' => 'Opção 1',
        'op2' => 'Opção 2',
        'op3' => 'Opção 3',
    ]); ?>

    <div class="form-group ">
        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']); ?>
        <?= Html::resetInput('Limpar', ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>