<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Currentlevel;

/**
 * CurrentlevelSearch represents the model behind the search form of `frontend\models\Currentlevel`.
 */
class CurrentlevelSearch extends Currentlevel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uid', 'sid', 'tid', 'stid'], 'integer'],
            [['tl', 'stl', 'sto', 'uto'], 'safe'],
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
        $query = Currentlevel::find();

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
            'uid' => $this->uid,
            'sid' => $this->sid,
            'tid' => $this->tid,
            'stid' => $this->stid,
        ]);

        $query->andFilterWhere(['like', 'tl', $this->tl])
            ->andFilterWhere(['like', 'stl', $this->stl])
            ->andFilterWhere(['like', 'sto', $this->sto])
            ->andFilterWhere(['like', 'uto', $this->uto]);

        return $dataProvider;
    }
}
