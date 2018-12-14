<?php

namespace frontend\controllers;

use Yii;
use frontend\models\ichkiMavzular;
use frontend\models\Ichki_mavzularSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Ichki_mavzularController implements the CRUD actions for ichkiMavzular model.
 */
class Ichki_mavzularController extends Controller
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
     * Lists all ichkiMavzular models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Ichki_mavzularSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ichkiMavzular model.
     * @param integer $id
     * @param string $Ichki_mavzu_nomi
     * @param string $Mavzular_id
     * @param string $Fanlar_ichki_mavzular_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $Ichki_mavzu_nomi, $Mavzular_id, $Fanlar_ichki_mavzular_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $Ichki_mavzu_nomi, $Mavzular_id, $Fanlar_ichki_mavzular_id),
        ]);
    }

    /**
     * Creates a new ichkiMavzular model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ichkiMavzular();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'Ichki_mavzu_nomi' => $model->Ichki_mavzu_nomi, 'Mavzular_id' => $model->Mavzular_id, 'Fanlar_ichki_mavzular_id' => $model->Fanlar_ichki_mavzular_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ichkiMavzular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param string $Ichki_mavzu_nomi
     * @param string $Mavzular_id
     * @param string $Fanlar_ichki_mavzular_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $Ichki_mavzu_nomi, $Mavzular_id, $Fanlar_ichki_mavzular_id)
    {
        $model = $this->findModel($id, $Ichki_mavzu_nomi, $Mavzular_id, $Fanlar_ichki_mavzular_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'Ichki_mavzu_nomi' => $model->Ichki_mavzu_nomi, 'Mavzular_id' => $model->Mavzular_id, 'Fanlar_ichki_mavzular_id' => $model->Fanlar_ichki_mavzular_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ichkiMavzular model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param string $Ichki_mavzu_nomi
     * @param string $Mavzular_id
     * @param string $Fanlar_ichki_mavzular_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $Ichki_mavzu_nomi, $Mavzular_id, $Fanlar_ichki_mavzular_id)
    {
        $this->findModel($id, $Ichki_mavzu_nomi, $Mavzular_id, $Fanlar_ichki_mavzular_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ichkiMavzular model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param string $Ichki_mavzu_nomi
     * @param string $Mavzular_id
     * @param string $Fanlar_ichki_mavzular_id
     * @return ichkiMavzular the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $Ichki_mavzu_nomi, $Mavzular_id, $Fanlar_ichki_mavzular_id)
    {
        if (($model = ichkiMavzular::findOne(['id' => $id, 'Ichki_mavzu_nomi' => $Ichki_mavzu_nomi, 'Mavzular_id' => $Mavzular_id, 'Fanlar_ichki_mavzular_id' => $Fanlar_ichki_mavzular_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
