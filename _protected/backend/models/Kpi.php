<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kpi".
 *
 * @property integer $id
 * @property string $name
 * @property integer $strategic_id
 *
 * @property Strategic $strategic
 * @property ProjectHasKpi[] $projectHasKpis
 * @property Project[] $projects
 */
class Kpi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kpi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'strategic_id'], 'required'],
            [['strategic_id'], 'integer'],
            [['name'], 'string', 'max' => 45],
            [['strategic_id'], 'exist', 'skipOnError' => true, 'targetClass' => Strategic::className(), 'targetAttribute' => ['strategic_id' => 'id']],
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
            'strategic_id' => 'ประเด็นยุทธศาสตร์',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStrategic()
    {
        return $this->hasOne(Strategic::className(), ['id' => 'strategic_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectHasKpis()
    {
        return $this->hasMany(ProjectHasKpi::className(), ['kpi_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['id' => 'project_id'])->viaTable('project_has_kpi', ['kpi_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return KpiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KpiQuery(get_called_class());
    }
}
