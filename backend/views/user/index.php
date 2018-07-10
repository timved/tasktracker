<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\assets\AppAsset;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
AppAsset::register($this);
$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php \yii\widgets\Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
//            'auth_key',
//            'password_hash',
//            'password_reset_token',
            'email:email',
            'status',
//            'role_id',
            [
                'attribute' => 'role_id',
//                'visible' => \Yii:: $app->user->can('create'),
//                'filterInputOptions' => ['class' => 'form-control'],
            'value' => function($model) {
                    return $model->getRole();
            },
                'filter' => [
                    '0' => 'Администратор',
                    '1' => 'Пользователь',
                    '2' => 'Гость',
                ]

            ],
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php \yii\widgets\Pjax::end(); ?>
</div>
