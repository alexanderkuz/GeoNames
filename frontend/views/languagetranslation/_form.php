<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\LanguageTranslation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="language-translation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'LanguageCode')->dropDownList([ 'aa' => 'Aa', 'ab' => 'Ab', 'ae' => 'Ae', 'af' => 'Af', 'ak' => 'Ak', 'am' => 'Am', 'an' => 'An', 'ar' => 'Ar', 'as' => 'As', 'av' => 'Av', 'ay' => 'Ay', 'az' => 'Az', 'ba' => 'Ba', 'be' => 'Be', 'bg' => 'Bg', 'bh' => 'Bh', 'bi' => 'Bi', 'bm' => 'Bm', 'bn' => 'Bn', 'bo' => 'Bo', 'br' => 'Br', 'bs' => 'Bs', 'ca' => 'Ca', 'ce' => 'Ce', 'ch' => 'Ch', 'co' => 'Co', 'cr' => 'Cr', 'cs' => 'Cs', 'cu' => 'Cu', 'cv' => 'Cv', 'cy' => 'Cy', 'da' => 'Da', 'de' => 'De', 'dv' => 'Dv', 'dz' => 'Dz', 'ee' => 'Ee', 'el' => 'El', 'en' => 'En', 'eo' => 'Eo', 'es' => 'Es', 'et' => 'Et', 'eu' => 'Eu', 'fa' => 'Fa', 'ff' => 'Ff', 'fi' => 'Fi', 'fl' => 'Fl', 'fj' => 'Fj', 'fo' => 'Fo', 'fr' => 'Fr', 'fy' => 'Fy', 'ga' => 'Ga', 'gd' => 'Gd', 'gl' => 'Gl', 'gn' => 'Gn', 'gu' => 'Gu', 'gv' => 'Gv', 'ha' => 'Ha', 'he' => 'He', 'hi' => 'Hi', 'ho' => 'Ho', 'hr' => 'Hr', 'ht' => 'Ht', 'hu' => 'Hu', 'hy' => 'Hy', 'hz' => 'Hz', 'ia' => 'Ia', 'id' => 'Id', 'ie' => 'Ie', 'ig' => 'Ig', 'ii' => 'Ii', 'ik' => 'Ik', 'io' => 'Io', 'is' => 'Is', 'it' => 'It', 'iu' => 'Iu', 'ja' => 'Ja', 'jv' => 'Jv', 'ka' => 'Ka', 'kg' => 'Kg', 'ki' => 'Ki', 'kj' => 'Kj', 'kk' => 'Kk', 'kl' => 'Kl', 'km' => 'Km', 'kn' => 'Kn', 'ko' => 'Ko', 'kr' => 'Kr', 'ks' => 'Ks', 'ku' => 'Ku', 'kv' => 'Kv', 'kw' => 'Kw', 'ky' => 'Ky', 'la' => 'La', 'lb' => 'Lb', 'lg' => 'Lg', 'li' => 'Li', 'ln' => 'Ln', 'lo' => 'Lo', 'lt' => 'Lt', 'lu' => 'Lu', 'lv' => 'Lv', 'mg' => 'Mg', 'mh' => 'Mh', 'mi' => 'Mi', 'mk' => 'Mk', 'ml' => 'Ml', 'mn' => 'Mn', 'mr' => 'Mr', 'ms' => 'Ms', 'mt' => 'Mt', 'my' => 'My', 'na' => 'Na', 'nb' => 'Nb', 'nd' => 'Nd', 'ne' => 'Ne', 'ng' => 'Ng', 'nl' => 'Nl', 'nn' => 'Nn', 'no' => 'No', 'nr' => 'Nr', 'nv' => 'Nv', 'ny' => 'Ny', 'oc' => 'Oc', 'oj' => 'Oj', 'om' => 'Om', 'or' => 'Or', 'os' => 'Os', 'pa' => 'Pa', 'pi' => 'Pi', 'pl' => 'Pl', 'ps' => 'Ps', 'pt' => 'Pt', 'qu' => 'Qu', 'rm' => 'Rm', 'rn' => 'Rn', 'ro' => 'Ro', 'ru' => 'Ru', 'rw' => 'Rw', 'sa' => 'Sa', 'sc' => 'Sc', 'sd' => 'Sd', 'se' => 'Se', 'sg' => 'Sg', 'sh' => 'Sh', 'si' => 'Si', 'sk' => 'Sk', 'sl' => 'Sl', 'sm' => 'Sm', 'sn' => 'Sn', 'so' => 'So', 'sq' => 'Sq', 'sr' => 'Sr', 'ss' => 'Ss', 'st' => 'St', 'su' => 'Su', 'sv' => 'Sv', 'sw' => 'Sw', 'ta' => 'Ta', 'te' => 'Te', 'tg' => 'Tg', 'th' => 'Th', 'ti' => 'Ti', 'tk' => 'Tk', 'tl' => 'Tl', 'tn' => 'Tn', 'to' => 'To', 'tr' => 'Tr', 'ts' => 'Ts', 'tt' => 'Tt', 'tw' => 'Tw', 'ty' => 'Ty', 'ug' => 'Ug', 'uk' => 'Uk', 'ur' => 'Ur', 'uz' => 'Uz', 've' => 'Ve', 'vi' => 'Vi', 'vo' => 'Vo', 'wa' => 'Wa', 'wo' => 'Wo', 'xh' => 'Xh', 'yi' => 'Yi', 'yo' => 'Yo', 'za' => 'Za', 'zh' => 'Zh', 'zu' => 'Zu', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Language')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CreatedDate')->textInput() ?>

    <?= $form->field($model, 'UpdatedDate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
