<?php

namespace backend\modules\settings\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\settings\models\Transportador;

/**
 * TransportadorSearch represents the model behind the search form of `backend\modules\settings\models\Transportador`.
 */
class TransportadorSearch extends Transportador
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idTransportador', 'Documento', 'Telefono'], 'integer'],
            [['Nombres', 'Apellidos', 'Correo'], 'safe'],
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
        $query = Transportador::find();

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
            'idTransportador' => $this->idTransportador,
            'Documento' => $this->Documento,
            'Telefono' => $this->Telefono,
        ]);

        $query->andFilterWhere(['like', 'Nombres', $this->Nombres])
            ->andFilterWhere(['like', 'Apellidos', $this->Apellidos])
            ->andFilterWhere(['like', 'Correo', $this->Correo]);

        return $dataProvider;
    }
}
