<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use frontend\assets\AppAsset;
AppAsset::register($this);
$this->title = 'White Rooster';
?>
<div class="site-index">
    <div class="logo"><?= Html::img('@web/img/logo/index.jpg', ['alt' => '"White rooster" таск-трекер']) ?></div>
</div>
