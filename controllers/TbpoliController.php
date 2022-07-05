<?php

namespace app\controllers;

use app\models\Tbpoli;
use app\models\TbpoliSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TbpoliController implements the CRUD actions for Tbpoli model.
 */
class TbpoliController extends Controller
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
     * Lists all Tbpoli models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TbpoliSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tbpoli model.
     * @param int $id_poli Id Poli
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_poli)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_poli),
        ]);
    }

    /**
     * Creates a new Tbpoli model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tbpoli();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_poli' => $model->id_poli]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tbpoli model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_poli Id Poli
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_poli)
    {
        $model = $this->findModel($id_poli);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_poli' => $model->id_poli]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tbpoli model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_poli Id Poli
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_poli)
    {
        $this->findModel($id_poli)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tbpoli model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_poli Id Poli
     * @return Tbpoli the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_poli)
    {
        if (($model = Tbpoli::findOne(['id_poli' => $id_poli])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
