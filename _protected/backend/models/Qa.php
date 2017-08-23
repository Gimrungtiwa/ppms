<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "qa".
 *
 * @property integer $id
 * @property string $name
 * @property integer $qa_lavel_id
 *
 * @property QaLevel $qaLavel
 * @property QaKpi[] $qaKpis
 */
class Qa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'qa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'qa_lavel_id'], 'required'],
            [['qa_lavel_id'], 'integer'],
            [['name'], 'string', 'max' => 45],
            [['qa_lavel_id'], 'exist', 'skipOnError' => true, 'targetClass' => QaLevel::className(), 'targetAttribute' => ['qa_lavel_id' => 'id']],
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
            'qa_lavel_id' => 'ระดับ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQaLavel()
    {
        return $this->hasOne(QaLevel::className(), ['id' => 'qa_lavel_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQaKpis()
    {
        return $this->hasMany(QaKpi::className(), ['qa_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return QaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QaQuery(get_called_class());
    }
}
