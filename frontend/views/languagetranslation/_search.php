<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\LanguageTranslationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="language-translation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'LanguageCode') ?>

    <?= $form->field($model, 'Language') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'CreatedDate') ?>

    <?= $form->field($model, 'UpdatedDate') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
