<?php
/**
 * Created by PhpStorm.
 * User: Hpp
 * Date: 07.06.2018
 * Time: 15:01
 */
?>
<table class="table table-bordered table-striped table-condensed" style="margin: 15px 0">
    <thead>
    <tr>
        <th scope="col">Месяц: <?=$monthName?></th>
        <th scope="col">Задачи:</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($calendar as $day => $events): ?>

        <tr>
            <td class="td-date"><span><?= $day; ?></span></td>
            <td>
                <? if (count($events) > 0) {
                    foreach ($events as $event) {
//                        echo '<a href="/task/view/' . $event->id . '"><p>' . $event->name . '</p><p class="small">' . $event->description . '</p></a>';
                        echo '<a href="'. \yii\helpers\Url::to(['task/view', 'id' => $event->id]) . '"<p>' . $event->name . '</p><p class="small">' . $event->description . '</p></a>';
                    }
                } else echo 'Задач нет'; ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
</table>