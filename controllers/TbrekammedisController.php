<?php

namespace app\controllers;

use app\models\Tbrekammedis;
use app\models\TbrekammedisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TbrekammedisController implements the CRUD actions for Tbrekammedis model.
 */
class TbrekammedisController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Tbrekammedis models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbrekammedisSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tbrekammedis model.
     * @param int $id_rm Id Rm
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_rm)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_rm),
        ]);
    }

    /**
     * Creates a new Tbrekammedis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tbrekammedis();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_rm' => $model->id_rm]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tbrekammedis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_rm Id Rm
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_rm)
    {
        $model = $this->findModel($id_rm);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_rm' => $model->id_rm]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tbrekammedis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_rm Id Rm
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_rm)
    {
        $this->findModel($id_rm)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tbrekammedis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_rm Id Rm
     * @return Tbrekammedis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_rm)
    {
        if (($model = Tbrekammedis::findOne(['id_rm' => $id_rm])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
