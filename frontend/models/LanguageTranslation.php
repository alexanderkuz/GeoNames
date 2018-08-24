<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "LanguageTranslation".
 *
 * @property string $LanguageCode
 * @property string $Language
 * @property string $Name
 * @property string $CreatedDate
 * @property string $UpdatedDate
 */
class LanguageTranslation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'LanguageTranslation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['LanguageCode', 'Language', 'Name'], 'required'],
            [['LanguageCode'], 'string'],
            [['CreatedDate', 'UpdatedDate'], 'safe'],
            [['Language'], 'string', 'max' => 2],
            [['Name'], 'string', 'max' => 120],
            [['LanguageCode', 'Language'], 'unique', 'targetAttribute' => ['LanguageCode', 'Language']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'LanguageCode' => Yii::t('app', 'Language Code'),
            'Language' => Yii::t('app', 'Language'),
            'Name' => Yii::t('app', 'Name'),
            'CreatedDate' => Yii::t('app', 'Created Date'),
            'UpdatedDate' => Yii::t('app', 'Updated Date'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return LanguageTranslationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LanguageTranslationQuery(get_called_class());
    }
}
