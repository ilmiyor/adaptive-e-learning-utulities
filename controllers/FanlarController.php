<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Fanlar;
use frontend\models\FanlarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FanlarController implements the CRUD actions for Fanlar model.
 */
class FanlarController extends Controller
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
     * Lists all Fanlar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FanlarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Fanlar model.
     * @param integer $id
     * @param string $Fan_nomi
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $Fan_nomi)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $Fan_nomi),
        ]);
    }

    /**
     * Creates a new Fanlar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Fanlar();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'Fan_nomi' => $model->Fan_nomi]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Fanlar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param string $Fan_nomi
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $Fan_nomi)
    {
        $model = $this->findModel($id, $Fan_nomi);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'Fan_nomi' => $model->Fan_nomi]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Fanlar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param string $Fan_nomi
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $Fan_nomi)
    {
        $this->findModel($id, $Fan_nomi)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Fanlar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param string $Fan_nomi
     * @return Fanlar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $Fan_nomi)
    {
        if (($model = Fanlar::findOne(['id' => $id, 'Fan_nomi' => $Fan_nomi])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
