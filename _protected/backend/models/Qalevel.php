<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "qa_level".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Qa[] $qas
 * @property QaLevelHasProject[] $qaLevelHasProjects
 * @property Project[] $projects
 */
class Qalevel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'qa_level';
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
            'name' => 'ชื่อ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQas()
    {
        return $this->hasMany(Qa::className(), ['qa_lavel_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQaLevelHasProjects()
    {
        return $this->hasMany(QaLevelHasProject::className(), ['qa_level_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['id' => 'project_id'])->viaTable('qa_level_has_project', ['qa_level_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return QalevelQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QalevelQuery(get_called_class());
    }
}
