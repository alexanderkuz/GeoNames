<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[LanguageTranslation]].
 *
 * @see LanguageTranslation
 */
class LanguageTranslationQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return LanguageTranslation[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return LanguageTranslation|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
