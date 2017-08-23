<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Project;

/**
 * ProjectSearch represents the model behind the search form about `backend\models\Project`.
 */
class ProjectSearch extends Project
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'amout', 'project_type_id', 'budgets_year_id', 'budget_source_id', 'product_id', 'project_status_id', 'employee_id'], 'integer'],
            [['no', 'name', 'place', 'purpose', 'objective', 'benefit', 'date_start', 'date_end', 'plan', 'date_start_plan', 'date_end_plan', 'do', 'date_start_do', 'date_end_do', 'check', 'date_start_check', 'date_end_check', 'action', 'date_start_action', 'date_endt_action'], 'safe'],
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
        $query = Project::find();

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
            'date_start' => $this->date_start,
            'date_end' => $this->date_end,
            'date_start_plan' => $this->date_start_plan,
            'date_end_plan' => $this->date_end_plan,
            'date_start_do' => $this->date_start_do,
            'date_end_do' => $this->date_end_do,
            'date_start_check' => $this->date_start_check,
            'date_end_check' => $this->date_end_check,
            'date_start_action' => $this->date_start_action,
            'date_endt_action' => $this->date_endt_action,
            'amout' => $this->amout,
            'project_type_id' => $this->project_type_id,
            'budgets_year_id' => $this->budgets_year_id,
            'budget_source_id' => $this->budget_source_id,
            'product_id' => $this->product_id,
            'project_status_id' => $this->project_status_id,
            'employee_id' => $this->employee_id,
        ]);

        $query->andFilterWhere(['like', 'no', $this->no])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'place', $this->place])
            ->andFilterWhere(['like', 'purpose', $this->purpose])
            ->andFilterWhere(['like', 'objective', $this->objective])
            ->andFilterWhere(['like', 'benefit', $this->benefit])
            ->andFilterWhere(['like', 'plan', $this->plan])
            ->andFilterWhere(['like', 'do', $this->do])
            ->andFilterWhere(['like', 'check', $this->check])
            ->andFilterWhere(['like', 'action', $this->action]);

        return $dataProvider;
    }
}
