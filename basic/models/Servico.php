<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servico".
 *
 * @property int $id
 * @property string $logradouro
 * @property string $localidade
 * @property string $nomeLogradouro
 * @property int $numeroCasa
 * @property string|null $pontoReferencia
 * @property string $tipoServico
 * @property string $nomeCompleto
 * @property string $telefone
 * @property string|null $comentarioSobreServico
 * @property string $dataSolicitacao
 * @property string|null $dataAtendimento
 * @property string $numProtocolo
 * @property string|null $deletedDate
 * @property string $createdAt
 * @property string|null $updatedAt
 */
class Servico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            [['logradouro', 'localidade', 'nomeLogradouro', 'numeroCasa', 'tipoServico', 'nomeCompleto', 'telefone', 'dataSolicitacao', 'numProtocolo', 'createdAt'], 'required'],
            [['numeroCasa'], 'integer'],
            [['dataSolicitacao', 'dataAtendimento', 'deletedDate', 'createdAt', 'updatedAt'], 'safe'],
            [['logradouro', 'localidade', 'nomeLogradouro', 'pontoReferencia', 'tipoServico', 'nomeCompleto', 'telefone', 'comentarioSobreServico'], 'string', 'max' => 255],
            [['numProtocolo'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logradouro' => 'Logradouro',
            'localidade' => 'Localidade',
            'nomeLogradouro' => 'Nome Logradouro',
            'numeroCasa' => 'Numero Casa',
            'pontoReferencia' => 'Ponto Referencia',
            'tipoServico' => 'Tipo Servico',
            'nomeCompleto' => 'Nome Completo',
            'telefone' => 'Telefone',
            'comentarioSobreServico' => 'Comentario Sobre Servico',
            'dataSolicitacao' => 'Data Solicitacao',
            'dataAtendimento' => 'Data Atendimento',
            'numProtocolo' => 'Num Protocolo',
            'deletedDate' => 'Deleted Date',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
