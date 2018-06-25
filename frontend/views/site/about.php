<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\assets\AppAsset;
AppAsset::register($this);
$this->title = 'Описание';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <p class="center large bolder">Таск-трекер</p>
    <p class="center">Таск-трекеры - они же таск-менеджеры или сервисы для совместной работы.</p>
    <p class="bolder">Минимальный функционал:</p>
    <ul>
        <li>Регистрация и авторизация пользователей</li>
        <li>Создание пользовательских команд (в БД отдельная таблица для объединения пользователей в команды)</li>
        <li>Роли в каждой команде </li>
        <ul class="circle">
            <li>Администратор</li>
            <ul class="square">
                <li>Добавление новых пользователей в команду</li>
                <li>Расформирование команды</li>
                <li>Любые операции с задачами внутри команды</li>
                <li>Добавление задач любому участнику команды</li>
            </ul>
            <li>Пользователь (участник команды)</li>
            <ul class="square">
                <li>Просмотр своих задач</li>
                <li>Выполнение задач (с написанием мини отчета или комментария)</li>
                <li>Просмотр состава команды (но не ее изменение)</li>
            </ul>
            <li>Гость (пользователь после регистрации)</li>
            <ul class="square">
                <li>Просмотр команд запрещен</li>
            </ul>
        </ul>
        <li>Задачи идут списком, каждая задача включает</li>
        <ul class="circle">
            <li>Название задачи</li>
            <li>Участники (1 лицо)</li>
            <li>Дата постановки</li>
            <li>Администратор (имя)</li>
            <li>Дедлайн (дата, до которой необходимо закрыть задачу), подсвечивать красным просроченные задачи</li>
            <li>Дата выполнения, добавляется при отметке задачи как выполненной</li>
        </ul>
        <li>Сделать страницу общей статистики по всем командам для администратора</li>
        <ul class="circle">
            <li>Вывод общего списка задач</li>
            <li>Вывод закрытых задач за последнюю неделю</li>
            <li>Отчет по просроченным задачам</li>
        </ul>
    </ul>
</div>

