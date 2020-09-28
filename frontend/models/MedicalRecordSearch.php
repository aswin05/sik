<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MedicalRecord;

/**
 * MedicalRecordSearch represents the model behind the search form of `frontend\models\MedicalRecord`.
 */
class MedicalRecordSearch extends MedicalRecord
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'is_deleted', 'created_by', 'updated_by'], 'integer'],
            [['complaint', 'action', 'recipe', 'diagnose', 'created_at', 'updated_at'], 'safe'],
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
        $query = MedicalRecord::find()->where(["is_deleted" => '0']);

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
            'name' => $this->name,
            'recipe' => $this->recipe,
            'is_deleted' => $this->is_deleted,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'complaint', $this->complaint])
            ->andFilterWhere(['like', 'action', $this->action])
            ->andFilterWhere(['like', 'diagnose', $this->diagnose]);

        return $dataProvider;
    }
}
