<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Language".
 *
 * @property string $LanguageCode
 * @property string $Code
 * @property string $Status
 * @property int $Sort
 * @property string $Name
 * @property string $CreatedDate
 * @property string $UpdatedDate
 */
class Language extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Language';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['LanguageCode', 'Name'], 'required'],
            [['LanguageCode', 'Status'], 'string'],
            [['CreatedDate', 'UpdatedDate'], 'safe'],
            [['Code', 'Name'], 'string', 'max' => 80],
            [['LanguageCode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'LanguageCode' => Yii::t('app', 'Language Code'),
            'Code' => Yii::t('app', 'Code'),
            'Status' => Yii::t('app', 'Status'),
            'Sort' => Yii::t('app', 'Sort'),
            'Name' => Yii::t('app', 'Name'),
            'CreatedDate' => Yii::t('app', 'Created Date'),
            'UpdatedDate' => Yii::t('app', 'Updated Date'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return LanguageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LanguageQuery(get_called_class());
    }
}
