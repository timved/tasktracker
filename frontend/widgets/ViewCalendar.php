<?php
/**
 * Created by PhpStorm.
 * User: Hpp
 * Date: 07.06.2018
 * Time: 15:00
 */

namespace app\widgets;

use yii\base\Widget;

class ViewCalendar extends Widget
{
    public $calendar;
    public $month;

    public function run()
    {
        $_monthsList = array(
            "1"=>"Январь","2"=>"Февраль","3"=>"Март",
            "4"=>"Апрель","5"=>"Май", "6"=>"Июнь",
            "7"=>"Июль","8"=>"Август","9"=>"Сентябрь",
            "10"=>"Октябрь","11"=>"Ноябрь","12"=>"Декабрь");
        $monthName = $_monthsList[date("$this->month")];
        return $this->render('view-calendar', ['calendar' => $this->calendar, 'monthName' => $monthName]);
    }

}