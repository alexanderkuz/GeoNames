<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TimeZone */

$this->title = Yii::t('app', 'Update Time Zone: ' . $model->TimeZoneId, [
    'nameAttribute' => '' . $model->TimeZoneId,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Time Zones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TimeZoneId, 'url' => ['view', 'id' => $model->TimeZoneId]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="time-zone-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
