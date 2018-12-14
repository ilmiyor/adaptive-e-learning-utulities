<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Misollar;

/**
 * MisollarSearch represents the model behind the search form of `frontend\models\Misollar`.
 */
class MisollarSearch extends Misollar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Weight'], 'integer'],
            [['Subject', 'Theme', 'Sub_theme', 'Problem_given', 'test_type', 'variant1', 'variant2', 'variant3', 'variant4', 'answer', 'Definition', 'Solve'], 'safe'],
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
        $query = Misollar::find();

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
            'Weight' => $this->Weight,
        ]);

        $query->andFilterWhere(['like', 'Subject', $this->Subject])
            ->andFilterWhere(['like', 'Theme', $this->Theme])
            ->andFilterWhere(['like', 'Sub_theme', $this->Sub_theme])
            ->andFilterWhere(['like', 'Problem_given', $this->Problem_given])
            ->andFilterWhere(['like', 'test_type', $this->test_type])
            ->andFilterWhere(['like', 'variant1', $this->variant1])
            ->andFilterWhere(['like', 'variant2', $this->variant2])
            ->andFilterWhere(['like', 'variant3', $this->variant3])
            ->andFilterWhere(['like', 'variant4', $this->variant4])
            ->andFilterWhere(['like', 'answer', $this->answer])
            ->andFilterWhere(['like', 'Definition', $this->Definition])
            ->andFilterWhere(['like', 'Solve', $this->Solve]);

        return $dataProvider;
    }
}
