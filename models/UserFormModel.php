<?php

namespace app\models;

use yii\base\Model;

class UserFormModel extends Model
{

    public $name;
    public $email;

    public function rules()
    {
        return [
            // the name, email, subject and body attributes are required
            [['name', 'email'], 'required'],

            // the email attribute should be a valid email address
            ['email', 'email'],
        ];
    }
}
