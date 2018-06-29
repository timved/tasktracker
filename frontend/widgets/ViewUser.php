<?php
/**
 * Created by PhpStorm.
 * User: Hpp
 * Date: 03.06.2018
 * Time: 14:10
 */

namespace app\widgets;
use yii\base\Widget;

class ViewUser extends Widget
{
    public $user;

    public function run()
    {
        return $this->render('view-user', ['user' => $this->user]);
    }


}