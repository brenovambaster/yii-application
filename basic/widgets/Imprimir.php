<?php

namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use yii\web\JsExpression;

class Imprimir extends Widget
{
    public function run()
    {
        return Html::button('Imprimir', [
            'class' => 'm-2 btn btn-primary float-end',
            'onclick' => new JsExpression('
                print();
            '),
        ]);
    }
}
