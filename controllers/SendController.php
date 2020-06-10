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
            //обработка чек-боксов
            $data = Yii::$app->request->post('User');
            $additionally = $data['additionally'];
            if(in_array("delivery", $additionally)) $user->delivery = true;
            if(in_array("transportation", $additionally)) $user->transportation = true;
            if(in_array("insurance", $additionally)) $user->insurance = true;
            if(in_array("equipment", $additionally)) $user->equipment = true;
            if(in_array("consultation", $additionally)) $user->consultation = true;

            //сохранение данных в БД
            $user->save();
            // отправка почты
            Yii::$app->mailer->compose('data', compact(['user', 'additionally']))
                ->setFrom('testmail.ak@mail.ru')
                ->setTo('testmail.ak@mail.ru')
                ->setSubject('Новые данные')
                ->send();
            // отображение данных
            return $this->render('index', compact(['user', 'additionally']));
        }


    }
}
