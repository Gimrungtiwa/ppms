<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Qalevel]].
 *
 * @see Qalevel
 */
class QalevelQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Qalevel[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Qalevel|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
