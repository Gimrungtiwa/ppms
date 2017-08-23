<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property integer $id
 * @property string $no
 * @property string $name
 * @property string $place
 * @property string $purpose
 * @property string $objective
 * @property string $benefit
 * @property string $date_start
 * @property string $date_end
 * @property string $plan
 * @property string $date_start_plan
 * @property string $date_end_plan
 * @property string $do
 * @property string $date_start_do
 * @property string $date_end_do
 * @property string $check
 * @property string $date_start_check
 * @property string $date_end_check
 * @property string $action
 * @property string $date_start_action
 * @property string $date_endt_action
 * @property integer $amout
 * @property integer $project_type_id
 * @property integer $budgets_year_id
 * @property integer $budget_source_id
 * @property integer $product_id
 * @property integer $project_status_id
 * @property integer $employee_id
 *
 * @property Activity[] $activities
 * @property BudgetsSource $budgetSource
 * @property BudgetsYear $budgetsYear
 * @property Employee $employee
 * @property Product $product
 * @property ProjectStatus $projectStatus
 * @property ProjectType $projectType
 * @property ProjectHasKpi[] $projectHasKpis
 * @property Kpi[] $kpis
 * @property QaLevelHasProject[] $qaLevelHasProjects
 * @property QaLevel[] $qaLevels
 * @property Value[] $values
 * @property Output[] $outputs
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no', 'name', 'place', 'purpose', 'objective', 'benefit', 'date_start', 'date_end', 'plan', 'date_start_plan', 'date_end_plan', 'do', 'date_start_do', 'date_end_do', 'check', 'date_start_check', 'date_end_check', 'action', 'date_start_action', 'date_endt_action', 'amout', 'project_type_id', 'budgets_year_id', 'budget_source_id', 'product_id', 'project_status_id', 'employee_id'], 'required'],
            [['place', 'purpose', 'objective', 'benefit', 'plan', 'do', 'check', 'action'], 'string'],
            [['date_start', 'date_end', 'date_start_plan', 'date_end_plan', 'date_start_do', 'date_end_do', 'date_start_check', 'date_end_check', 'date_start_action', 'date_endt_action'], 'safe'],
            [['amout', 'project_type_id', 'budgets_year_id', 'budget_source_id', 'product_id', 'project_status_id', 'employee_id'], 'integer'],
            [['no', 'name'], 'string', 'max' => 45],
            [['budget_source_id'], 'exist', 'skipOnError' => true, 'targetClass' => BudgetsSource::className(), 'targetAttribute' => ['budget_source_id' => 'id']],
            [['budgets_year_id'], 'exist', 'skipOnError' => true, 'targetClass' => BudgetsYear::className(), 'targetAttribute' => ['budgets_year_id' => 'id']],
            [['employee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['employee_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['project_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProjectStatus::className(), 'targetAttribute' => ['project_status_id' => 'id']],
            [['project_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProjectType::className(), 'targetAttribute' => ['project_type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no' => 'รหัสโครงการ',
            'name' => 'ชื่อ',
            'place' => 'สถานที่',
            'purpose' => 'หลักการและเหตุผล',
            'objective' => 'วัตถุประสงค์',
            'benefit' => 'ผลที่คาดว่าจะได้รับ',
            'date_start' => 'เริ่มดำเนินการ',
            'date_end' => 'สิ้นสุดการดำเนินการ',
            'plan' => 'การวางแผน',
            'date_start_plan' => 'Date Start Plan',
            'date_end_plan' => 'Date End Plan',
            'do' => 'การดำเนินงาน',
            'date_start_do' => 'Date Start Do',
            'date_end_do' => 'Date End Do',
            'check' => 'การติดตาม และประเมินผล',
            'date_start_check' => 'Date Start Check',
            'date_end_check' => 'Date End Check',
            'action' => 'การปรับปรุง',
            'date_start_action' => 'Date Start Action',
            'date_endt_action' => 'Date Endt Action',
            'amout' => 'ค่าใช้จ่ายทั้งหมด',
            'project_type_id' => 'ประเภทโครงการ',
            'budgets_year_id' => 'ปีงบประมาณ',
            'budget_source_id' => 'ประเภทงบประมาณ',
            'product_id' => 'ผลผลิต',
            'project_status_id' => 'สถานะโครงการ',
            'employee_id' => 'ผู้รับผิดชอบ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivities()
    {
        return $this->hasMany(Activity::className(), ['project_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBudgetSource()
    {
        return $this->hasOne(BudgetsSource::className(), ['id' => 'budget_source_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBudgetsYear()
    {
        return $this->hasOne(BudgetsYear::className(), ['id' => 'budgets_year_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectStatus()
    {
        return $this->hasOne(ProjectStatus::className(), ['id' => 'project_status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectType()
    {
        return $this->hasOne(ProjectType::className(), ['id' => 'project_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectHasKpis()
    {
        return $this->hasMany(ProjectHasKpi::className(), ['project_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKpis()
    {
        return $this->hasMany(Kpi::className(), ['id' => 'kpi_id'])->viaTable('project_has_kpi', ['project_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQaLevelHasProjects()
    {
        return $this->hasMany(QaLevelHasProject::className(), ['project_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQaLevels()
    {
        return $this->hasMany(QaLevel::className(), ['id' => 'qa_level_id'])->viaTable('qa_level_has_project', ['project_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValues()
    {
        return $this->hasMany(Value::className(), ['project_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOutputs()
    {
        return $this->hasMany(Output::className(), ['id' => 'output_id'])->viaTable('value', ['project_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ProjectQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProjectQuery(get_called_class());
    }
}
