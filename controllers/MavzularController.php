<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Mavzular;
use frontend\models\MavzularSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MavzularController implements the CRUD actions for Mavzular model.
 */
class MavzularController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Mavzular models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MavzularSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Mavzular model.
     * @param integer $id
     * @param string $Mavzu_nomi
     * @param string $Fanlar_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $Mavzu_nomi, $Fanlar_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $Mavzu_nomi, $Fanlar_id),
        ]);
    }

    /**
     * Creates a new Mavzular model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mavzular();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'Mavzu_nomi' => $model->Mavzu_nomi, 'Fanlar_id' => $model->Fanlar_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Mavzular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param string $Mavzu_nomi
     * @param string $Fanlar_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $Mavzu_nomi, $Fanlar_id)
    {
        $model = $this->findModel($id, $Mavzu_nomi, $Fanlar_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'Mavzu_nomi' => $model->Mavzu_nomi, 'Fanlar_id' => $model->Fanlar_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Mavzular model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param string $Mavzu_nomi
     * @param string $Fanlar_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $Mavzu_nomi, $Fanlar_id)
    {
        $this->findModel($id, $Mavzu_nomi, $Fanlar_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Mavzular model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param string $Mavzu_nomi
     * @param string $Fanlar_id
     * @return Mavzular the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $Mavzu_nomi, $Fanlar_id)
    {
        if (($model = Mavzular::findOne(['id' => $id, 'Mavzu_nomi' => $Mavzu_nomi, 'Fanlar_id' => $Fanlar_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
