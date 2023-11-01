<?php

namespace app\controllers;

use app\models\Users;
use yii\web\Controller;

class UsersController extends Controller
{

    public function actionIndex()
    {

        $users = Users::find()->all();
        // print_r($users);
        return $this->render('users', ['users' => $users]);
    }
}
