<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "output".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Value[] $values
 * @property Project[] $projects
 */
class Output extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'output';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ผลลัพธ์',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValues()
    {
        return $this->hasMany(Value::className(), ['output_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['id' => 'project_id'])->viaTable('value', ['output_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return OutputQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OutputQuery(get_called_class());
    }
}
