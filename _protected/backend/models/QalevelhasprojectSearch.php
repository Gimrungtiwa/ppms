<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Qalevelhasproject;

/**
 * QalevelhasprojectSearch represents the model behind the search form about `backend\models\Qalevelhasproject`.
 */
class QalevelhasprojectSearch extends Qalevelhasproject
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['qa_level_id', 'project_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Qalevelhasproject::find();

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
            'qa_level_id' => $this->qa_level_id,
            'project_id' => $this->project_id,
        ]);

        return $dataProvider;
    }
}
