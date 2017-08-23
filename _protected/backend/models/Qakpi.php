<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "qa_kpi".
 *
 * @property integer $id
 * @property string $name
 * @property integer $qa_id
 *
 * @property Qa $qa
 */
class Qakpi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'qa_kpi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'qa_id'], 'required'],
            [['qa_id'], 'integer'],
            [['name'], 'string', 'max' => 45],
            [['qa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Qa::className(), 'targetAttribute' => ['qa_id' => 'id']],
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
            'qa_id' => 'ตัวบ่งชี้การประกันคุณภาพการศึกษาภายใน ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQa()
    {
        return $this->hasOne(Qa::className(), ['id' => 'qa_id']);
    }

    /**
     * @inheritdoc
     * @return QakpiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QakpiQuery(get_called_class());
    }
}
