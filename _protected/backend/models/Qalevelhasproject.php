<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "qa_level_has_project".
 *
 * @property integer $qa_level_id
 * @property integer $project_id
 *
 * @property Project $project
 * @property QaLevel $qaLevel
 */
class Qalevelhasproject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'qa_level_has_project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_id'], 'required'],
            [['project_id'], 'integer'],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
            [['qa_level_id'], 'exist', 'skipOnError' => true, 'targetClass' => QaLevel::className(), 'targetAttribute' => ['qa_level_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'qa_level_id' => 'ระดับตัวบ่งชี้การประกันคุณภาพการศึกษาภายใน ',
            'project_id' => 'โครงการ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQaLevel()
    {
        return $this->hasOne(QaLevel::className(), ['id' => 'qa_level_id']);
    }

    /**
     * @inheritdoc
     * @return QalevelhasprojectQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QalevelhasprojectQuery(get_called_class());
    }
}
