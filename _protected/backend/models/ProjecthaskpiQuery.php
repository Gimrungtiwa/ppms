<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Projecthaskpi]].
 *
 * @see Projecthaskpi
 */
class ProjecthaskpiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Projecthaskpi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Projecthaskpi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
