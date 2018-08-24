<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "TimeZone".
 *
 * @property string $TimeZoneId
 * @property string $CountryCode
 * @property string $Code
 * @property int $Sort
 * @property string $GMT
 * @property string $DST
 * @property string $rawOffset
 * @property string $GMTMonth
 * @property string $GMTWeek
 * @property string $GMTDayOfWeek
 * @property string $GMTHour
 * @property string $DSTMonth
 * @property string $DSTWeek
 * @property string $DSTDayOfWeek
 * @property string $DSTHour
 * @property string $CreatedDate
 * @property string $UpdatedDate
 */
class TimeZone extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TimeZone';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TimeZoneId'], 'required'],
            [['TimeZoneId', 'CountryCode', 'GMTMonth', 'GMTWeek', 'GMTDayOfWeek', 'DSTMonth', 'DSTWeek', 'DSTDayOfWeek'], 'string'],
            [['GMT', 'DST', 'rawOffset'], 'number'],
            [['GMTHour', 'DSTHour', 'CreatedDate', 'UpdatedDate'], 'safe'],
            [['Code'], 'string', 'max' => 50],
            [['TimeZoneId'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'TimeZoneId' => Yii::t('app', 'Time Zone ID'),
            'CountryCode' => Yii::t('app', 'Country Code'),
            'Code' => Yii::t('app', 'Code'),
            'Sort' => Yii::t('app', 'Sort'),
            'GMT' => Yii::t('app', 'Gmt'),
            'DST' => Yii::t('app', 'Dst'),
            'rawOffset' => Yii::t('app', 'Raw Offset'),
            'GMTMonth' => Yii::t('app', 'Gmtmonth'),
            'GMTWeek' => Yii::t('app', 'Gmtweek'),
            'GMTDayOfWeek' => Yii::t('app', 'Gmtday Of Week'),
            'GMTHour' => Yii::t('app', 'Gmthour'),
            'DSTMonth' => Yii::t('app', 'Dstmonth'),
            'DSTWeek' => Yii::t('app', 'Dstweek'),
            'DSTDayOfWeek' => Yii::t('app', 'Dstday Of Week'),
            'DSTHour' => Yii::t('app', 'Dsthour'),
            'CreatedDate' => Yii::t('app', 'Created Date'),
            'UpdatedDate' => Yii::t('app', 'Updated Date'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TimeZoneQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TimeZoneQuery(get_called_class());
    }
}
