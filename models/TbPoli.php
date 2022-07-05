<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_poli".
 *
 * @property int $id_poli
 * @property string $nama_poli
 */
class TbPoli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_poli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_poli'], 'required'],
            [['nama_poli'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_poli' => 'Id Poli',
            'nama_poli' => 'Nama Poli',
        ];
    }
}
