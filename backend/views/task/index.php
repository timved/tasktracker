<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use \common\models\User;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\TaskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tasks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Task', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'date',
//            'description:ntext',
            [
                'attribute'=>'description',
                'format'=>'raw',
//                'class' => 'yii\grid\SerialColumn',
                'contentOptions' => ['style' => 'width:200px; white-space: normal;'],
//                'style' => 'width:100px',
            ],
//            'user_id',
            [
                'attribute' => 'user_username',
                'label' => 'Пользователь',
                'value' => function($model){
                    return $model->user->username;
                },
//                'filter' => ArrayHelper::map(User::find()->all(), 'id', 'username'),
//                'filterOptions' => ['style' => 'height: 10px;'],
            ],
            //'status',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
