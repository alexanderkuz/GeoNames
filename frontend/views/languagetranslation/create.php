<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\LanguageTranslation */

$this->title = Yii::t('app', 'Create Language Translation');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Language Translations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="language-translation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
