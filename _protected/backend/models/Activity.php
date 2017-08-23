<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "activity".
 *
 * @property integer $id
 * @property string $name
 * @property string $date_start
 * @property string $date_end
 * @property string $detail1
 * @property string $amout1
 * @property string $detail2
 * @property string $amout2
 * @property string $detail3
 * @property string $amout3
 * @property integer $project_id
 *
 * @property Project $project
 */
class Activity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'activity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'date_start', 'date_end', 'detail1', 'amout1', 'detail2', 'amout2', 'detail3', 'amout3', 'project_id'], 'required'],
            [['date_start', 'date_end'], 'safe'],
            [['detail1', 'detail2', 'detail3'], 'string'],
            [['project_id'], 'integer'],
            [['name', 'amout1', 'amout2', 'amout3'], 'string', 'max' => 45],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ชื่อกิจกรรม',
            'date_start' => 'เริ่ม',
            'date_end' => 'สิ้นสุด',
            'detail1' => 'รายละเอียดค่าตอบแทน',
            'amout1' => 'จำนวนเงินค่าตอบแทน',
            'detail2' => 'รายละเอียดค่าใช้สอย',
            'amout2' => 'จำนวนเงินค่าใช้สอย',
            'detail3' => 'รายละเอียดค่าวัสดุ',
            'amout3' => 'จำนวนเงินค่าวัสดุ',
            'project_id' => 'Project ID',
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
     * @inheritdoc
     * @return ActivityQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ActivityQuery(get_called_class());
    }
}
