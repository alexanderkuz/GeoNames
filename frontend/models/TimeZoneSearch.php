<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TimeZone;

/**
 * TimeZoneSearch represents the model behind the search form of `frontend\models\TimeZone`.
 */
class TimeZoneSearch extends TimeZone
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TimeZoneId', 'CountryCode', 'Code', 'GMTMonth', 'GMTWeek', 'GMTDayOfWeek', 'GMTHour', 'DSTMonth', 'DSTWeek', 'DSTDayOfWeek', 'DSTHour', 'CreatedDate', 'UpdatedDate'], 'safe'],
            [['Sort'], 'integer'],
            [['GMT', 'DST', 'rawOffset'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TimeZone::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Sort' => $this->Sort,
            'GMT' => $this->GMT,
            'DST' => $this->DST,
            'rawOffset' => $this->rawOffset,
            'GMTHour' => $this->GMTHour,
            'DSTHour' => $this->DSTHour,
            'CreatedDate' => $this->CreatedDate,
            'UpdatedDate' => $this->UpdatedDate,
        ]);

        $query->andFilterWhere(['like', 'TimeZoneId', $this->TimeZoneId])
            ->andFilterWhere(['like', 'CountryCode', $this->CountryCode])
            ->andFilterWhere(['like', 'Code', $this->Code])
            ->andFilterWhere(['like', 'GMTMonth', $this->GMTMonth])
            ->andFilterWhere(['like', 'GMTWeek', $this->GMTWeek])
            ->andFilterWhere(['like', 'GMTDayOfWeek', $this->GMTDayOfWeek])
            ->andFilterWhere(['like', 'DSTMonth', $this->DSTMonth])
            ->andFilterWhere(['like', 'DSTWeek', $this->DSTWeek])
            ->andFilterWhere(['like', 'DSTDayOfWeek', $this->DSTDayOfWeek]);

        return $dataProvider;
    }
}
