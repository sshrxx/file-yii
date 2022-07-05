<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_pasien".
 *
 * @property int $id_pasien
 * @property string $nama_pasien
 * @property string $jk
 */
class TbPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'jk'], 'required'],
            [['jk'], 'string'],
            [['nama_pasien'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
            'jk' => 'Jk',
        ];
    }
}
