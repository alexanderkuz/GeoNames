<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\TimeZone */

$this->title = $model->TimeZoneId;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Time Zones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="time-zone-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->TimeZoneId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->TimeZoneId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'TimeZoneId',
            'CountryCode',
            'Code',
            'Sort',
            'GMT',
            'DST',
            'rawOffset',
            'GMTMonth',
            'GMTWeek',
            'GMTDayOfWeek',
            'GMTHour',
            'DSTMonth',
            'DSTWeek',
            'DSTDayOfWeek',
            'DSTHour',
            'CreatedDate',
            'UpdatedDate',
        ],
    ]) ?>

</div>
