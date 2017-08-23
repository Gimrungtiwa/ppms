<?php

namespace backend\controllers;

use Yii;
use backend\models\Projecthaskpi;
use backend\models\ProjecthaskpiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProjecthaskpiController implements the CRUD actions for Projecthaskpi model.
 */
class ProjecthaskpiController extends Controller
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
     * Lists all Projecthaskpi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProjecthaskpiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Projecthaskpi model.
     * @param integer $project_id
     * @param integer $kpi_id
     * @return mixed
     */
    public function actionView($project_id, $kpi_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($project_id, $kpi_id),
        ]);
    }

    /**
     * Creates a new Projecthaskpi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Projecthaskpi();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'project_id' => $model->project_id, 'kpi_id' => $model->kpi_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Projecthaskpi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $project_id
     * @param integer $kpi_id
     * @return mixed
     */
    public function actionUpdate($project_id, $kpi_id)
    {
        $model = $this->findModel($project_id, $kpi_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'project_id' => $model->project_id, 'kpi_id' => $model->kpi_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Projecthaskpi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $project_id
     * @param integer $kpi_id
     * @return mixed
     */
    public function actionDelete($project_id, $kpi_id)
    {
        $this->findModel($project_id, $kpi_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Projecthaskpi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $project_id
     * @param integer $kpi_id
     * @return Projecthaskpi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($project_id, $kpi_id)
    {
        if (($model = Projecthaskpi::findOne(['project_id' => $project_id, 'kpi_id' => $kpi_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
