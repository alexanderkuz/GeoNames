<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TimeZone */

$this->title = Yii::t('app', 'Create Time Zone');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Time Zones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="time-zone-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
