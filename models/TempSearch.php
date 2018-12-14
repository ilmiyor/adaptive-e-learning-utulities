<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\NewTable;

/**
 * TempSearch represents the model behind the search form of `frontend\models\NewTable`.
 */
class TempSearch extends NewTable
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idnew_table', 'age', 'high'], 'integer'],
            [['Variant', 'name'], 'safe'],
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
        $query = NewTable::find();

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
            'idnew_table' => $this->idnew_table,
            'age' => $this->age,
            'high' => $this->high,
        ]);

        $query->andFilterWhere(['like', 'Variant', $this->Variant])
            ->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
