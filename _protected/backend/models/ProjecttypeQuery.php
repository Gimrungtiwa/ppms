<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Projecttype]].
 *
 * @see Projecttype
 */
class ProjecttypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Projecttype[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Projecttype|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
