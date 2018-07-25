<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TimeZoneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Time Zones');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="time-zone-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Time Zone'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
