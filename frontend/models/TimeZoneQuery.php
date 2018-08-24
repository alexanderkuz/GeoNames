<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[TimeZone]].
 *
 * @see TimeZone
 */
class TimeZoneQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TimeZone[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TimeZone|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
