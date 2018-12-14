<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\User;
use frontend\models\Sublog;
use frontend\models\Currentlevel;
use frontend\models\Subjects;
use frontend\models\Themes;
use frontend\models\Subthemes;
use frontend\models\LearningObjects;
use yii\web\NotFoundHttpException;

/**
 * This is controller for math activities;
 */

class MathController extends Controller
{

        public function actionIndex()
        {
          $id = Yii::$app->user->identity->id;

          $model = new Currentlevel();
          if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect('math');
          }
          //$initialLOid = $this->setLO('ini');
          return $this->render('user_ini', [
            'model'     =>$model,
            'id'        =>$id,

          //  'initialLOid' =>$initialLOid

          ]);

        }

        public function actionMath()
        {
          $id = Yii::$app->user->identity->id;
          $sublog = new Sublog();
          if ($sublog->load(Yii::$app->request->post()) && $sublog->save()) {
              return $this->levelAlter($sublog);
          };

          if (($userLevel=Currentlevel::findOne($id))!==null) {
            $LO = $this->contentEstablisher($userLevel);
            return $this->render('/math/math', [
              'uid' => $id,
              'testContent' => $LO,
              'model' => $sublog,
            ]);
          }else {
            return $this->redirect(['user_ini']);
          }

        }

        /**
        * Initializes the user level
        */
        public function actionUser_ini()
        {
          $id = Yii::$app->user->identity->id;

          $model = new Currentlevel();
          if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $triggerHim = $this->setLO($model->uid);
            return $this->redirect('math');
          }
          //$initialLOid = $this->setLO('ini');
          return $this->render('/math/user_ini', [
            'model'     =>$model,
            'id'        =>$id,
          //  'initialLOid' =>$initialLOid

          ]);
        }

        /**
        * Establishes and passes test contents the current user needs to take
        */
        protected function contentEstablisher($userLevel)
        {
        //  $currentTheme = $userLevel->tid;
          $testContent = LearningObjects::findOne($userLevel->loid);

          return $testContent;
        }

        /**
        * Set a LO for the current user
        * @level is defined to wether the learner is new or continueing ('ini' or 'continueing' respectively)
        */
        protected function setLO($uid)
        {
          $currentuserlevel = Currentlevel::findOne($uid);
          if ($currentuserlevel->mode==1) {
            $model = LearningObjects::find()
            ->where(['subthemeid' => 1])
            ->orderBy('Weight ASC')
            ->all();
          }
          else {
            $model = LearningObjects::find()
            ->where(['subthemeid' => 1])
            ->orderBy('Weight DESC')
            ->all();
          }
          $i=0;
          foreach ($model as $asLO) {
            ++$i;
            $orderedLO[$i] = $asLO->id;
          }

           $currentuserlevel->loid = $orderedLO[1];
           $currentuserlevel->save();

        }

        /**
        * Set a LO for the current user
        * @level is defined to wether the learner is new or continueing ('ini' or 'continueing' respectively)
        */
        protected function orderedLO($uid)
        {
          $currentuserlevel = Currentlevel::findOne($uid);
          if (isset($model)) {
            unset($model);
          }
          if ($currentuserlevel->mode==1) {
            $model = LearningObjects::find()
            ->where(['subthemeid' => strval($currentuserlevel->stid)])
            ->orderBy('Weight ASC')
            ->all();
          }
          else {
            $model = LearningObjects::find()
            ->where(['subthemeid' => strval($currentuserlevel->stid)])
            ->orderBy('Weight DESC')
            ->all();

            $i=0;
            if (isset($orderedLO)) {
              unset($orderedLO);
            }
            $orderedLO = array();
            foreach ($model as $asLO) {
              ++$i;
              $orderedLO[$i] = $asLO->id;
            };

            return $orderedLO;
          };


        }

        /**
        * Alter the knowledge level
        *
        */
        protected function levelAlter($lastAction)
        {

          $grader = LearningObjects::findOne($lastAction->graderid);
          if ($lastAction->response!==$grader->answer) {
            return $this->redirect(['math']);
          }
          else {
            //Awarding time!!!
            $currentLevel = Currentlevel::findOne($lastAction->uid);

              // $currentLevel->save();

            $award = $grader->weight;
            $currentLevel->stl += $award;
            // $currentLevel->save();
            if($currentLevel->stl>=70) {
              $currentLevel->stl=0;
              ++$currentLevel->stid;
              ++$currentLevel->tl;
              $currentLevel->save();
            };

            $subthemecount = Subthemes::find()->where(['themeid' => $currentLevel->tid])->count();
            if ($currentLevel->tl==$subthemecount) {
              $currentLevel->tl=0;
              ++$currentLevel->tid;
            };
            $stidControl = $currentLevel->stid;
            $orderedSet = $this->orderedLO($currentLevel->uid); //{1=>3, 2=>4, 3=>2,4=>1}
            $arrayKey = array_search($currentLevel->loid, $orderedSet);
            if ($arrayKey<count($orderedSet)) {
              ++$arrayKey;
              if (LearningObjects::find()->where(['subthemeid' => strval($currentLevel->stid)])->count()) {
                $currentLevel->loid = $orderedSet[$arrayKey];
                $currentLevel->save();
              }
            }

            $currentLevel->save();

            return $this->redirect(['math']);
          };

        }
}
