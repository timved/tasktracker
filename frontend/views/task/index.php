<?php
/**
 * Created by PhpStorm.
 * User: Hpp
 * Date: 27.06.2018
 * Time: 14:10
 */


$this->title = "Календарь задач: $user";
?>

<?= \app\widgets\ViewUser::widget([
    'user' => $user,
]);
?>

<?php $form = \yii\widgets\ActiveForm::begin([

    'id' => 'month-form',
    'options' => [
        'class' => 'form-horizontal',
        'name' => 'months'],
]); ?>
<?= $form = \yii\helpers\Html::dropDownList('select', 'null',
    ['1' => 'январь',
        '2' => 'февраль',
        '3' => 'март',
        '4' => 'апрель',
        '5' => 'май',
        '6' => 'июнь',
        '7' => 'июль',
        '8' => 'август',
        '9' => 'сентябрь',
        '10' => 'октябрь',
        '11' => 'ноябрь',
        '12' => 'декабрь',],
    ['prompt' => 'Выберите месяц...',
        'style' => 'margin-right: 10px',
    ]

); ?>
<?= \yii\helpers\Html::submitButton('Посмотреть', ['class' => 'btn btn-primary btn-xs']) ?>
<?php \yii\widgets\ActiveForm::end(); ?>

<?= \app\widgets\ViewCalendar::widget([
    'calendar' => $calendar,
    'month' => $month,
]);
?>