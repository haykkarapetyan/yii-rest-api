<?php

namespace api\modules\v1\controllers;

use Yii;
use yii\rest\ActiveController;
use common\models\LoginForm;
use frontend\models\SignupForm;
use yii\helpers\Json;
use common\models\UserApps;
use common\models\UserAppChannels;
use common\models\UserAppMembers;

/**
 *
 * @author Hayk
 */
class AuthController extends ActiveController
{
    public $modelClass = 'frontend\models\SignupForm'; 
    
    public function actions()
    {
        return [];
    }
    
    public function actionLogin() {
        $model = new LoginForm();
        
        if ($model->load(Yii::$app->getRequest()->getBodyParams(), '') && $model->login()) {
            $userInfo = Yii::$app->user->identity;
            return [
                'access_token' => $userInfo->getAuthKey(),
                'username' => $userInfo->username,
                'email' => $userInfo->email,
            ];
        } else {
            $model->validate();
            return $model;
        }
    }
    
    public function actionSignup()
    {
        $model = new SignupForm();
        $model->load(Yii::$app->getRequest()->getBodyParams(), '');
        if ($user = $model->signup()) {
            $response = Yii::$app->getResponse();
            $response->setStatusCode(201);
            return ['access_token' => $user->auth_key];
        } elseif (!$model->hasErrors()) {
            throw new ServerErrorHttpException('Failed to create the object for unknown reason.');
        }

        return $model;
    }
}


