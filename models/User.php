<?php

namespace app\models;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

class User extends ActiveRecord
{
   // поле используется для работы формы (чек-боксы)
    public $additionally;

    public static function tableName()
    {
        return 'users';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // если вместо метки времени UNIX используется datetime:
                'value' => new Expression('NOW()'),
            ],
        ];
    }


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
            [['fio', 'phone', 'email'], 'required'],
            ['email', 'email'],
            [ 'comment', 'trim'],
            [ 'comment', 'string', 'max' => 1024, 'tooLong' => 'Максимально 1024 символа'],
            [ 'phone', 'match', 'pattern' => '/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/', 'message' => 'Номер телефона нужно ввести в форматее +X(XXX)XXX-XX-XX' ],
        ];
    }


}
