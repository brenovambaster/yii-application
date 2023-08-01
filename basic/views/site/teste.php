<?php

use yii\helpers\Html;

?>

<div class="container">

    <?php
    // echo $model->nome
    // Se colocarmos <script>alert('XSS Test')</script> no campo nome, o alerta será executado
    // Dessa forma não seguro. O ideal é usar o Html::encode() para evitar ataques XSS
    ?>

    <?= Html::encode($model->nome) ?>
</div>