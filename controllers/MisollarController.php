<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Misollar;
use frontend\models\MisollarSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MisollarController implements the CRUD actions for Misollar model.
 */
class MisollarController extends Controller
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
     * Lists all Misollar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MisollarSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Misollar model.
     * @param integer $id
     * @param string $Subject
     * @param string $Theme
     * @param string $Sub_theme
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id, $Subject, $Theme, $Sub_theme)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $Subject, $Theme, $Sub_theme),
        ]);
    }

    /**
     * Creates a new Misollar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Misollar();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'Subject' => $model->Subject, 'Theme' => $model->Theme, 'Sub_theme' => $model->Sub_theme]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Misollar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param string $Subject
     * @param string $Theme
     * @param string $Sub_theme
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $Subject, $Theme, $Sub_theme)
    {
        $model = $this->findModel($id, $Subject, $Theme, $Sub_theme);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'Subject' => $model->Subject, 'Theme' => $model->Theme, 'Sub_theme' => $model->Sub_theme]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Misollar model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param string $Subject
     * @param string $Theme
     * @param string $Sub_theme
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $Subject, $Theme, $Sub_theme)
    {
        $this->findModel($id, $Subject, $Theme, $Sub_theme)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Misollar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param string $Subject
     * @param string $Theme
     * @param string $Sub_theme
     * @return Misollar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $Subject, $Theme, $Sub_theme)
    {
        if (($model = Misollar::findOne(['id' => $id, 'Subject' => $Subject, 'Theme' => $Theme, 'Sub_theme' => $Sub_theme])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
