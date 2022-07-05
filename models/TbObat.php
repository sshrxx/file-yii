<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_obat".
 *
 * @property int $id_obat
 * @property string $nama_obat
 * @property int $stok_obat
 */
class TbObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_obat', 'stok_obat'], 'required'],
            [['stok_obat'], 'integer'],
            [['nama_obat'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_obat' => 'Id Obat',
            'nama_obat' => 'Nama Obat',
            'stok_obat' => 'Stok Obat',
        ];
    }
}
