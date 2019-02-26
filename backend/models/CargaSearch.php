<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Carga;

/**
 * CargaSearch represents the model behind the search form of `backend\models\Carga`.
 */
class CargaSearch extends Carga
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idCarga', 'Empresa'], 'integer'],
            [['FechaLimite', 'ValorOfertado', 'Contenido', 'Peso'], 'safe'],
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
        $query = Carga::find();

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
            'idCarga' => $this->idCarga,
            'FechaLimite' => $this->FechaLimite,
            'Empresa' => $this->Empresa,
        ]);

        $query->andFilterWhere(['like', 'ValorOfertado', $this->ValorOfertado])
            ->andFilterWhere(['like', 'Contenido', $this->Contenido])
            ->andFilterWhere(['like', 'Peso', $this->Peso]);

        return $dataProvider;
    }
}
