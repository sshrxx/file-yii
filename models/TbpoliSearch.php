<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tbpoli;

/**
 * TbpoliSearch represents the model behind the search form of `app\models\Tbpoli`.
 */
class TbpoliSearch extends Tbpoli
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_poli'], 'integer'],
            [['nama_poli'], 'safe'],
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
        $query = Tbpoli::find();

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
            'id_poli' => $this->id_poli,
        ]);

        $query->andFilterWhere(['like', 'nama_poli', $this->nama_poli]);

        return $dataProvider;
    }
}
