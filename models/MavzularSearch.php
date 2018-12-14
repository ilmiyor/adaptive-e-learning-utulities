<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Mavzular;

/**
 * MavzularSearch represents the model behind the search form of `frontend\models\Mavzular`.
 */
class MavzularSearch extends Mavzular
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Mavzu_nomi', 'Fanlar_id', 'Rule', 'pass'], 'safe'],
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
        $query = Mavzular::find();

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
        ]);

        $query->andFilterWhere(['like', 'Mavzu_nomi', $this->Mavzu_nomi])
            ->andFilterWhere(['like', 'Fanlar_id', $this->Fanlar_id])
            ->andFilterWhere(['like', 'Rule', $this->Rule])
            ->andFilterWhere(['like', 'pass', $this->pass]);

        return $dataProvider;
    }
}
