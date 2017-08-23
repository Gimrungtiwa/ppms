<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Projectstatus]].
 *
 * @see Projectstatus
 */
class ProjectstatusQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Projectstatus[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Projectstatus|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
