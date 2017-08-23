<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Qalevelhasproject]].
 *
 * @see Qalevelhasproject
 */
class QalevelhasprojectQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Qalevelhasproject[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Qalevelhasproject|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
