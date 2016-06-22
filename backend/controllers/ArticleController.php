<?php

namespace backend\controllers;

use Yii;
use backend\models\Article;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends Controller
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
     * Lists all Article models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Article::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Article model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Article();

    $rootPath = Yii::getAlias("@frontend")."/web/" . Yii::$app->params['upload_img_dir'];
        
        if ($model->load(Yii::$app->request->post())) {
        $image = UploadedFile::getInstance($model, 'img');
        	
        	if ($image) {
        		$ext = $image->getExtension();
        		$randName = time() . rand(1000, 9999) . '.' . $ext;
        		$rootPath .= 'article/';
        		if (!file_exists($rootPath)) {
        			mkdir($rootPath, 0777, true);
        		}
        		$image->saveAs($rootPath . $randName);
        		$model->img = $randName;
        		$model->path = Yii::$app->params['upload_img_dir'] . 'slide/' . $randName;
        	}
        	        	
        	if ($model->save()) {
        		return $this->redirect(['view', 'id' => $model->id]);
        	} else {
        		//没有保存成功，删除图片
        		@unlink($rootPath . $randName);
        	}
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

    	$rootPath = Yii::getAlias("@frontend")."/web/" . Yii::$app->params['upload_img_dir'];
        $old_img = $model->img;
        $old_path = $model->path;
        
        if ($model->load(Yii::$app->request->post())) {
        	$image = UploadedFile::getInstance($model, 'img');
        	
        	if ($image) {
        		$ext = $image->getExtension();
        		$randName = time() . rand(1000, 9999) . "." . $ext;
        		$rootPath .= "article/";
        		if (!file_exists($rootPath)) {
        			mkdir($rootPath, 0777, true);
        		}
        		$image->saveAs($rootPath . $randName);
        		$model->img = $randName;
        		$model->path = Yii::$app->params['upload_img_dir'] . 'article/' . $randName;
        		//删除图片
        		@unlink(Yii::getAlias("@frontend")."/web/" . $old_path);
        	} else {
        		$model->img = $old_img;
        	}
        	if ($model->save()) {
        		return $this->redirect(['view', 'id' => $model->id]);
        	}
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Article model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        //删除图片
    	@unlink(Yii::getAlias("@frontend")."/web/" . $this->findModel($id)->path);
    	
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
