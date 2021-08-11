<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NasExt;

/**
 * NasExtSearch represents the model behind the search form of `app\models\NasExt`.
 */
class NasExtSearch extends NasExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ports'], 'integer'],
            [['nasname', 'shortname', 'type', 'secret', 'server', 'community', 'description'], 'safe'],
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
        $query = NasExt::find();

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
            'ports' => $this->ports,
        ]);

        $query->andFilterWhere(['like', 'nasname', $this->nasname])
            ->andFilterWhere(['like', 'shortname', $this->shortname])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'secret', $this->secret])
            ->andFilterWhere(['like', 'server', $this->server])
            ->andFilterWhere(['like', 'community', $this->community])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
