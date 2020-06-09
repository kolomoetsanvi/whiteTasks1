<?php

namespace app\controllers;

use app\models\DataForm;
use Yii;
use yii\web\Controller;
use app\models\User;



class SendController extends Controller
{


    public function actionIndex()
    {
//        return $this->render('index');
          $user = new User();

        if ($user->load(Yii::$app->request->post())) {
            $data = Yii::$app->request->post('User');
            $additionally = $data['additionally'];


//            debug(Yii::$app->request->post());
            $user->save();
            return $this->render('index', compact(['user', 'additionally']));
        }


    }
}
