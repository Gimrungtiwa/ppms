<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "budgets_source".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Project[] $projects
 */
class Budgetssource extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'budgets_source';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ชื่องบประมาณ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['budget_source_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return BudgetssourceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BudgetssourceQuery(get_called_class());
    }
}
