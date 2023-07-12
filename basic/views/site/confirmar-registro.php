<?php

use yii\helpers\Html;

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