<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TimeZoneSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="time-zone-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'TimeZoneId') ?>

    <?= $form->field($model, 'CountryCode') ?>

    <?= $form->field($model, 'Code') ?>

    <?= $form->field($model, 'Sort') ?>

    <?= $form->field($model, 'GMT') ?>

    <?php // echo $form->field($model, 'DST') ?>

    <?php // echo $form->field($model, 'rawOffset') ?>

    <?php // echo $form->field($model, 'GMTMonth') ?>

    <?php // echo $form->field($model, 'GMTWeek') ?>

    <?php // echo $form->field($model, 'GMTDayOfWeek') ?>

    <?php // echo $form->field($model, 'GMTHour') ?>

    <?php // echo $form->field($model, 'DSTMonth') ?>

    <?php // echo $form->field($model, 'DSTWeek') ?>

    <?php // echo $form->field($model, 'DSTDayOfWeek') ?>

    <?php // echo $form->field($model, 'DSTHour') ?>

    <?php // echo $form->field($model, 'CreatedDate') ?>

    <?php // echo $form->field($model, 'UpdatedDate') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
