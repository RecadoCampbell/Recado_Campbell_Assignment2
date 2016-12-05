<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\userprofile;

/**
 * UserProfileSearch represents the model behind the search form about `app\models\userprofile`.
 */
class UserProfileSearch extends userprofile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'years_exp', 'careerLevel', 'communicationLevel', 'organizationLevel', 'jobLevel', 'PhoneNumber'], 'integer'],
            [['fullName', 'gender', 'dob', 'industry', 'location', 'aboutMe', 'picture', 'title', 'address', 'website', 'email'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = userprofile::find();

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
            'id' => $this->id,
            'dob' => $this->dob,
            'years_exp' => $this->years_exp,
            'careerLevel' => $this->careerLevel,
            'communicationLevel' => $this->communicationLevel,
            'organizationLevel' => $this->organizationLevel,
            'jobLevel' => $this->jobLevel,
            'PhoneNumber' => $this->PhoneNumber,
        ]);

        $query->andFilterWhere(['like', 'fullName', $this->fullName])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'industry', $this->industry])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'aboutMe', $this->aboutMe])
            ->andFilterWhere(['like', 'picture', $this->picture])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
