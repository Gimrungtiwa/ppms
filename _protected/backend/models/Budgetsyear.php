<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "budgets_year".
 *
 * @property integer $id
 * @property string $name
 * @property string $active
 *
 * @property Policy[] $policies
 * @property Project[] $projects
 * @property Strategic[] $strategics
 */
class Budgetsyear extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'budgets_year';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'active'], 'required'],
            [['name', 'active'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ปีงบประมาณ',
            'active' => 'Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPolicies()
    {
        return $this->hasMany(Policy::className(), ['budgets_year_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['budgets_year_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStrategics()
    {
        return $this->hasMany(Strategic::className(), ['budgets_year_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return BudgetsyearQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BudgetsyearQuery(get_called_class());
    }
}
