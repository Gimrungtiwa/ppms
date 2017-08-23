<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "project_status".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Project[] $projects
 */
class Projectstatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_status';
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
            'name' => 'สถานะ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['project_status_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ProjectstatusQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProjectstatusQuery(get_called_class());
    }
}
