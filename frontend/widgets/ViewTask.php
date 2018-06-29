<?php
/**
 * Created by PhpStorm.
 * User: Hpp
 * Date: 07.06.2018
 * Time: 16:17
 */

namespace app\widgets;


use yii\base\Widget;

class ViewTask extends Widget
{
    public $task;

    public function run()
    {
        return $this->render('view-task', ['task' => $this->task]);
    }

}