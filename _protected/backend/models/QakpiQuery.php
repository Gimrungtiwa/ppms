<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Qakpi]].
 *
 * @see Qakpi
 */
class QakpiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Qakpi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Qakpi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
