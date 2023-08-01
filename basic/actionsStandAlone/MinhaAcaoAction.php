<?php

namespace app\actionsStandAlone;

use yii\base\Action;

class MinhaAcaoAction extends Action
{
    public function run()
    {

        return $this->controller->render('error', [
            'name' => $this->controller->request->get('name'),
            'message' => $this->controller->request->get('message'),
            'desc' => $this->controller->request->get('desc'),
        ]);
    }
}
