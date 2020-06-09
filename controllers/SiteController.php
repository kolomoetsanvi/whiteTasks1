<?php

namespace app\controllers;

use app\models\User;
use Yii;
use yii\web\Controller;
use app\models\DataForm;


class SiteController extends Controller
{


    public function actionIndex()
    {
        $user = new User();
        return $this->render('index', compact('user'));
    }

}
