<?php

namespace frontend\controllers;

use Yii;
use frontend\models\LanguageTranslation;
use frontend\models\LanguageTranslationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LanguagetranslationController implements the CRUD actions for LanguageTranslation model.
 */
class LanguagetranslationController extends Controller
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
     * Lists all LanguageTranslation models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LanguageTranslationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single LanguageTranslation model.
     * @param string $LanguageCode
     * @param string $Language
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($LanguageCode, $Language)
    {
        return $this->render('view', [
            'model' => $this->findModel($LanguageCode, $Language),
        ]);
    }

    /**
     * Creates a new LanguageTranslation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new LanguageTranslation();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'LanguageCode' => $model->LanguageCode, 'Language' => $model->Language]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing LanguageTranslation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $LanguageCode
     * @param string $Language
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($LanguageCode, $Language)
    {
        $model = $this->findModel($LanguageCode, $Language);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'LanguageCode' => $model->LanguageCode, 'Language' => $model->Language]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing LanguageTranslation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $LanguageCode
     * @param string $Language
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($LanguageCode, $Language)
    {
        $this->findModel($LanguageCode, $Language)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the LanguageTranslation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $LanguageCode
     * @param string $Language
     * @return LanguageTranslation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($LanguageCode, $Language)
    {
        if (($model = LanguageTranslation::findOne(['LanguageCode' => $LanguageCode, 'Language' => $Language])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
