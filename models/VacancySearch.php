<?php

namespace klunker\vacancy\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use klunker\vacancy\models\Vacancy;

/**
 * VacancySearch represents the model behind the search form of `common\modules\vacancy\models\Vacancy`.
 */
class VacancySearch extends Vacancy
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'description', 'keywords', 'h1', 'content', 'skills', 'date_create', 'publish_at'], 'safe'],
            [['salary_from', 'salary_to'], 'number'],
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
        $query = Vacancy::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [ 'pageSize' => 10 ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'salary_from' => $this->salary_from,
            'salary_to' => $this->salary_to,
            'date_create' => $this->date_create,
            'publish_at' => $this->publish_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'h1', $this->h1])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'skills', $this->skills]);

        return $dataProvider;
    }
}
