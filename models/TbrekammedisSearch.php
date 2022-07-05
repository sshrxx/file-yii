<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tbrekammedis;

/**
 * TbrekammedisSearch represents the model behind the search form of `app\models\Tbrekammedis`.
 */
class TbrekammedisSearch extends Tbrekammedis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_rm', 'id_dokter', 'id_obat', 'id_pasien', 'id_poli'], 'integer'],
            [['tgl_periksa', 'diagnosa'], 'safe'],
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
        $query = Tbrekammedis::find();

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
            'id_rm' => $this->id_rm,
            'id_dokter' => $this->id_dokter,
            'id_obat' => $this->id_obat,
            'id_pasien' => $this->id_pasien,
            'id_poli' => $this->id_poli,
        ]);

        $query->andFilterWhere(['like', 'tgl_periksa', $this->tgl_periksa])
            ->andFilterWhere(['like', 'diagnosa', $this->diagnosa]);

        return $dataProvider;
    }
}
