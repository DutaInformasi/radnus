<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RadusergroupExt;

/**
 * RadusergroupExtSearch represents the model behind the search form of `app\models\RadusergroupExt`.
 */
class RadusergroupExtSearch extends RadusergroupExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'groupname'], 'safe'],
            [['priority', 'id'], 'integer'],
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
        $query = RadusergroupExt::find();

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
            'priority' => $this->priority,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'groupname', $this->groupname]);

        return $dataProvider;
    }
}
