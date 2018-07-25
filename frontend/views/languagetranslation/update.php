<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\LanguageTranslation */

$this->title = Yii::t('app', 'Update Language Translation: ' . $model->Name, [
    'nameAttribute' => '' . $model->Name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Language Translations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'LanguageCode' => $model->LanguageCode, 'Language' => $model->Language]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="language-translation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
