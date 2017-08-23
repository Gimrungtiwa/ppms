<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Budgetsyear]].
 *
 * @see Budgetsyear
 */
class BudgetsyearQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Budgetsyear[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Budgetsyear|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
