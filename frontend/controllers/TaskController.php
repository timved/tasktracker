<?php
/**
 * Created by PhpStorm.
 * User: Hpp
 * Date: 27.06.2018
 * Time: 19:02
 */

namespace frontend\controllers;

use common\models\Task;
use \Yii;
use yii\caching\DbDependency;
use yii\web\Controller;

class TaskController extends Controller
{
    public function actionIndex()
    {
        $userName = Yii::$app->user->identity->username;
        $userId = Yii::$app->user->id;
        $month = (Yii::$app->request->post('select')) ? Yii::$app->request->post('select') : date('n');
        $calendar = array_fill_keys(range(1, cal_days_in_month(CAL_GREGORIAN, $month, date('Y'))),[]);

        $cache = Yii::$app->cache;
        $key = 'tasks_' . $month;


        $dependency = new DbDependency();

//        $dependency->sql = "SELECT count(*) from task where year(`date`) = year(now()) and month(`date`) = $month and user_id = $userId";
        $dependency->sql = "SELECT max(updated_at) from task where year(`date`) = year(now()) and month(`date`) = $month and user_id = $userId";
        if (!$calendarCache = $cache->get($key)){
            $calendarCache = (Task::getByCurrentMonth($userId,$month));
            $cache->set($key,$calendarCache,null, $dependency);
        }


        foreach ( $calendarCache as $tasks){
            $date = \DateTime::createFromFormat("Y-m-d H:i:s", $tasks->date);
            $calendar[$date->format("j")][] = $tasks;
        }

        return $this->render('index', ['calendar' => $calendar, 'user' => $userName, 'month' => $month]);

    }

}