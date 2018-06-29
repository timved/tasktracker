<?php
/**
 * Created by PhpStorm.
 * User: Hpp
 * Date: 07.06.2018
 * Time: 16:17
 */
?>
<dl class="row">
    <dt class="col-sm-3">Номер задачи: </dt>
    <dd class="col-sm-9"><?=$task->id?></dd>

    <dt class="col-sm-3">Название: </dt>
    <dd class="col-sm-9"> <?=$task->name?></dd>

    <dt class="col-sm-3">Описание: </dt>
    <dd class="col-sm-9"><?=$task->description?></dd>

    <dt class="col-sm-3 text-truncate">Дата создания: </dt>
    <dd class="col-sm-9"><?=$task->created_at?></dd>

    <dt class="col-sm-3 text-truncate">Ответственный: </dt>
    <dd class="col-sm-9"><?=$task->user->username?></dd>
</dl>