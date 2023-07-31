<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * ServicoSearch represents the model behind the search form of `app\models\Servico`.
 */
class ServicoSearch extends Servico
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'numeroCasa'], 'integer'],
            [['logradouro', 'localidade', 'nomeLogradouro', 'pontoReferencia', 'tipoServico', 'nomeCompleto', 'telefone', 'comentarioSobreServico', 'dataSolicitacao', 'dataAtendimento', 'numProtocolo', 'deletedDate', 'createdAt', 'updatedAt'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Servico::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'numeroCasa' => $this->numeroCasa,
            'dataSolicitacao' => $this->dataSolicitacao,
            'deletedDate' => $this->deletedDate,
            'updatedAt' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['like', 'logradouro', $this->logradouro])
            ->andFilterWhere(['like', 'localidade', $this->localidade])
            ->andFilterWhere(['like', 'nomeLogradouro', $this->nomeLogradouro])
            ->andFilterWhere(['like', 'pontoReferencia', $this->pontoReferencia])
            ->andFilterWhere(['like', 'tipoServico', $this->tipoServico])
            ->andFilterWhere(['like', 'nomeCompleto', $this->nomeCompleto])
            ->andFilterWhere(['like', 'telefone', $this->telefone])
            ->andFilterWhere(['like', 'createdAt', $this->createdAt])
            ->andFilterWhere(['like', 'dataAtendimento', $this->dataAtendimento])
            ->andFilterWhere(['like', 'comentarioSobreServico', $this->comentarioSobreServico])
            ->andFilterWhere(['like', 'numProtocolo', $this->numProtocolo]);

        return $dataProvider;
    }
}
