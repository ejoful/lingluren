<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\Article;
use backend\models\Slide;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
    	$list0 = Article::find()
    	->where(['indexs' => 0])
    	->orderBy('position Asc')
    	->all();
    	
    	$list1 = Article::find()
    	->where(['indexs' => 1])
    	->orderBy('position Asc')
    	->all();
    	
    	$list2 = Article::find()
    	->where(['indexs' => 2])
    	->orderBy('position Asc')
    	->all();
    	
    	$slides = Slide::find()
    	->orderBy('position Asc')
    	->all();
    	
//     	print_r($list0);die();
        return $this->render('index',['slides' => $slides,'list0' => $list0, 'list1' => $list1, 'list2' => $list2]);
    }

}
