<?php

namespace backend\controllers;

use Yii;
use backend\models\Qalevelhasproject;
use backend\models\QalevelhasprojectSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * QalevelhasprojectController implements the CRUD actions for Qalevelhasproject model.
 */
class QalevelhasprojectController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Qalevelhasproject models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new QalevelhasprojectSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Qalevelhasproject model.
     * @param integer $qa_level_id
     * @param integer $project_id
     * @return mixed
     */
    public function actionView($qa_level_id, $project_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($qa_level_id, $project_id),
        ]);
    }

    /**
     * Creates a new Qalevelhasproject model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Qalevelhasproject();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'qa_level_id' => $model->qa_level_id, 'project_id' => $model->project_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Qalevelhasproject model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $qa_level_id
     * @param integer $project_id
     * @return mixed
     */
    public function actionUpdate($qa_level_id, $project_id)
    {
        $model = $this->findModel($qa_level_id, $project_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'qa_level_id' => $model->qa_level_id, 'project_id' => $model->project_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Qalevelhasproject model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $qa_level_id
     * @param integer $project_id
     * @return mixed
     */
    public function actionDelete($qa_level_id, $project_id)
    {
        $this->findModel($qa_level_id, $project_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Qalevelhasproject model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $qa_level_id
     * @param integer $project_id
     * @return Qalevelhasproject the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($qa_level_id, $project_id)
    {
        if (($model = Qalevelhasproject::findOne(['qa_level_id' => $qa_level_id, 'project_id' => $project_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
