<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "project_type".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Project[] $projects
 */
class Projecttype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ประเภท',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['project_type_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ProjecttypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProjecttypeQuery(get_called_class());
    }
}
