<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "policy".
 *
 * @property integer $id
 * @property string $name
 * @property integer $budgets_year_id
 *
 * @property BudgetsYear $budgetsYear
 * @property Product[] $products
 */
class Policy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'policy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'budgets_year_id'], 'required'],
            [['budgets_year_id'], 'integer'],
            [['name'], 'string', 'max' => 45],
            [['budgets_year_id'], 'exist', 'skipOnError' => true, 'targetClass' => BudgetsYear::className(), 'targetAttribute' => ['budgets_year_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ชื่อ',
            'budgets_year_id' => 'ปีงบประมาณ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBudgetsYear()
    {
        return $this->hasOne(BudgetsYear::className(), ['id' => 'budgets_year_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['policy_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return PolicyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PolicyQuery(get_called_class());
    }
}
