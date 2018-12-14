<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Baxolar;

/**
 * BaxolarSearch represents the model behind the search form of `frontend\models\Baxolar`.
 */
class BaxolarSearch extends Baxolar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['misollar', 'userid', 'yaratilganvaqt', 'ozgartirilganvaqt', 'baxolovchi', 'baxo', 'urunishlarsoni'], 'safe'],
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
        $query = Baxolar::find();

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

        $query->andFilterWhere(['like', 'misollar', $this->misollar])
            ->andFilterWhere(['like', 'userid', $this->userid])
            ->andFilterWhere(['like', 'yaratilganvaqt', $this->yaratilganvaqt])
            ->andFilterWhere(['like', 'ozgartirilganvaqt', $this->ozgartirilganvaqt])
            ->andFilterWhere(['like', 'baxolovchi', $this->baxolovchi])
            ->andFilterWhere(['like', 'baxo', $this->baxo])
            ->andFilterWhere(['like', 'urunishlarsoni', $this->urunishlarsoni]);

        return $dataProvider;
    }
}
