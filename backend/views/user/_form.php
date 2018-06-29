<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--    --><? //= $form->field($model, 'status')->textInput() ?>

    <!--    --><? //= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
    <!---->
    <!--    --><? //= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
    <!---->
    <!--    --><? //= $form->field($model, 'password_hash')->passwordInput() ?>

    <?= $form->field($model, 'role_id')->dropDownList([
        '0' => 'Администратор',
        '1' => 'Пользователь',
        '2' => 'Гость',
    ],
        $params = [
            'prompt' => 'Изменить роль...',
        ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
