<?php

namespace app\controllers;

use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use Yii;

class MainController extends Controller
{
    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'corsFilter' => [
                'class' => Cors::class,
                'cors'  => Yii::$app->params['apiCorsOptions'],
            ],
        ]);
    }
}