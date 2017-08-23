<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "value".
 *
 * @property integer $project_id
 * @property integer $output_id
 * @property string $results
 *
 * @property Output $output
 * @property Project $project
 */
class Value extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'value';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['output_id', 'results'], 'required'],
            [['output_id'], 'integer'],
            [['results'], 'string', 'max' => 45],
            [['output_id'], 'exist', 'skipOnError' => true, 'targetClass' => Output::className(), 'targetAttribute' => ['output_id' => 'id']],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'project_id' => 'โครงการ',
            'output_id' => 'ผลลัพธ์',
            'results' => 'ผลลัพธ์',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOutput()
    {
        return $this->hasOne(Output::className(), ['id' => 'output_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }

    /**
     * @inheritdoc
     * @return ValueQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ValueQuery(get_called_class());
    }
}
