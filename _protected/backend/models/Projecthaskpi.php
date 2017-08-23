<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "project_has_kpi".
 *
 * @property integer $project_id
 * @property integer $kpi_id
 *
 * @property Kpi $kpi
 * @property Project $project
 */
class Projecthaskpi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_has_kpi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kpi_id'], 'required'],
            [['kpi_id'], 'integer'],
            [['kpi_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kpi::className(), 'targetAttribute' => ['kpi_id' => 'id']],
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
            'kpi_id' => 'ตัวบ่งชี้',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKpi()
    {
        return $this->hasOne(Kpi::className(), ['id' => 'kpi_id']);
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
     * @return ProjecthaskpiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProjecthaskpiQuery(get_called_class());
    }
}
