<?php

namespace backend\modules\settings\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\settings\models\vehiculo;

/**
 * vehiculoSearch represents the model behind the search form of `backend\modules\settings\models\vehiculo`.
 */
class vehiculoSearch extends vehiculo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idVehiculo', 'Transportador'], 'integer'],
            [['Placa', 'Marca', 'PSoat', 'PMarca'], 'safe'],
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
        $query = vehiculo::find();

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
            'idVehiculo' => $this->idVehiculo,
            'Transportador' => $this->Transportador,
        ]);

        $query->andFilterWhere(['like', 'Placa', $this->Placa])
            ->andFilterWhere(['like', 'Marca', $this->Marca])
            ->andFilterWhere(['like', 'PSoat', $this->PSoat])
            ->andFilterWhere(['like', 'PMarca', $this->PMarca]);

        return $dataProvider;
    }
}
