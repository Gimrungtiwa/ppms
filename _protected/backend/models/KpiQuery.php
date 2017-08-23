<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Kpi]].
 *
 * @see Kpi
 */
class KpiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Kpi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Kpi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
