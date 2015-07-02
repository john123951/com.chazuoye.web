<?php
/**
 * Created by PhpStorm.
 * User: sweet
 * Date: 2015/6/29
 * Time: 11:37
 */

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Class CenterController
 * @package frontend\controllers
 */
class CenterController extends Controller
{
    public function actionIndex()
    {
        return $this->render("index");
    }

}