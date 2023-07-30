<?php

namespace app\models;

use yii;
use  yii\base\Model;

class FormularioDeRegistro extends Model
{
    private $SIZENAME = 30;
    public $nome, $senha;
    public $e_mail;
    public  $data, $teste;
    public $sexo;

    /* 
    * Especifica as regras de validação. Se o atrubuto não for especificado, ele não será validado e será considerado seguro.
    * Para que isso não ocorra, é necessário especificar o atributo 'safe' no método rules();
    * Todos os atributos requeridos devem ser especificados primeiro, na primeira posição do array.
    */
    public function rules()
    {
        return [
            [['nome', 'e_mail', 'senha', 'data'], 'required', 'message' => 'Campo obrigatório'],
            ['nome', 'string', 'max' => $this->SIZENAME, 'tooLong' => 'Nome muito longo. Máximo de ' . $this->SIZENAME . ' caracteres.'],
            ['senha', 'string', 'message' => 'Senha inválida', 'length' => [8, 16], 'tooShort' => 'Senha muito curta', 'tooLong' => 'Senha muito longa'],
            ['e_mail', 'email', 'message' => 'E-mail inválido'],
            ['data', 'date',   'format' => 'yyyy-MM-dd', 'message' => 'Data inválida inválida'],
            ['sexo', 'in', 'range' => ['M', 'F', 'O']],
            ['teste', 'safe']
        ];
    }

    //especifica os labels que aparecerão na view
    public  function  attributeLabels()
    {
        return [
            'nome' => 'Nome completo',
            'e_mail' => 'E-mail',
            'senha' => 'Senha',
            'data' => 'Data de nascimento',
            'sexo' => 'Sexo'
        ];
    }
    public function beforeValidate()
    {
        $this->nome = trim($this->nome);
        $this->e_mail = trim($this->e_mail);
        $this->senha = trim($this->senha);
        $this->data = trim($this->data);
        $this->sexo = trim($this->sexo);
        $this->teste = trim($this->teste);
        return parent::beforeValidate();
    }
}
