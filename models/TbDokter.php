<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_dokter".
 *
 * @property int $id_dokter
 * @property string $nama_dokter
 * @property string $Spesialis
 */
class TbDokter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_dokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_dokter', 'Spesialis'], 'required'],
            [['nama_dokter', 'Spesialis'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dokter' => 'Id Dokter',
            'nama_dokter' => 'Nama Dokter',
            'Spesialis' => 'Spesialis',
        ];
    }
}
