<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "campus".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property string $email
 *
 * @property Faculty[] $faculties
 */
class Campus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'phone', 'email'], 'required'],
            [['name', 'phone', 'email'], 'string', 'max' => 45],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ชื่อวิทยาเขต',
            'address' => 'ที่อยู่',
            'phone' => 'เบอร์โทรศัพท์',
            'email' => 'e-mail',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaculties()
    {
        return $this->hasMany(Faculty::className(), ['campus_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return CampusQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CampusQuery(get_called_class());
    }
}
