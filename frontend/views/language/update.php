<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Language */

$this->title = Yii::t('app', 'Update Language: ' . $model->Name, [
    'nameAttribute' => '' . $model->Name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Languages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->LanguageCode]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="language-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
