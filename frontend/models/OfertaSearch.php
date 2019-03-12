<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Oferta;

/**
 * OfertaSearch represents the model behind the search form of `frontend\models\Oferta`.
 */
class OfertaSearch extends Oferta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idOferta', 'Vehiculo', 'Carga'], 'integer'],
            [['Fecha', 'Valorpropuesta'], 'safe'],
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
        $query = Oferta::find();

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
            'idOferta' => $this->idOferta,
            'Vehiculo' => $this->Vehiculo,
            'Carga' => $this->Carga,
        ]);

        $query->andFilterWhere(['like', 'Fecha', $this->Fecha])
            ->andFilterWhere(['like', 'Valorpropuesta', $this->Valorpropuesta]);

        return $dataProvider;
    }
}
