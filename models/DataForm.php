<?php


namespace app\models;


use yii\base\Model;

class DataForm extends Model
{
    public $fio;
    public $phone;
    public $email;
    public $additionally;
    public $comment;

    public function attributeLabels()
    {
        return [
            'fio' => 'ФИО',
            'phone' => 'Телефон',
            'email' => 'Email',
            'additionally' => 'Оплатить дополнительно',
            'comment' => 'Комментарий',
        ];
    }

    public function rules()
    {
        return [
            // поля обязательные к заполнению
            [['fio', 'phone', 'email'], 'required'],
            // проверка на тип данных
            ['email', 'email'],
            // проверка на тип данных
            [ 'phone', 'match', 'pattern' => '\+[0-9] \([0-9]{3}\) [0-9]{3}-[0-9]{2}-[0-9]{2}$', 'message' => 'Вы ввели не верные данные' ],

            [ 'comment', 'trim'],
            [ 'comment', 'max' => 1024, 'tooLong' => 'Максимально 1024 символа'],

        ];
    }


}