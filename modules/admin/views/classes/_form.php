<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Classes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'curses_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Curses::find()->all(), id, name))?>

    <?= $form->field($model, 'lecture_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Lecture::find()->all(), id, name))?>

    <?= $form->field($model, 'data_day')->dropDownList(['1'=>'Понедельник', '2'=>'Вторник',
        '3'=>'Среда', '4'=>'Четверг', '5'=>'Пятница', '6'=>'Суббота', '0'=>'Воскресенье'])?>

    <?= $form->field($model, 'data_start_time')->textInput()?>

    <?= $form->field($model, 'data_end_time')->textInput()?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>