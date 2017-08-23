<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "faculty".
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property integer $campus_id
 *
 * @property Department[] $departments
 * @property Campus $campus
 */
class Faculty extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faculty';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'name', 'campus_id'], 'required'],
            [['campus_id'], 'integer'],
            [['code'], 'string', 'max' => 11],
            [['name'], 'string', 'max' => 45],
            [['campus_id'], 'exist', 'skipOnError' => true, 'targetClass' => Campus::className(), 'targetAttribute' => ['campus_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'รหัส',
            'name' => 'ชื่อ',
            'campus_id' => 'วิทยาเขต',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Department::className(), ['faculty_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCampus()
    {
        return $this->hasOne(Campus::className(), ['id' => 'campus_id']);
    }

    /**
     * @inheritdoc
     * @return FacultyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FacultyQuery(get_called_class());
    }
}
