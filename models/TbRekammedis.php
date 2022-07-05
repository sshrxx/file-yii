<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_rekammedis".
 *
 * @property int $id_rm
 * @property string $tgl_periksa
 * @property string $diagnosa
 * @property int $id_dokter
 * @property int $id_obat
 * @property int $id_pasien
 * @property int $id_poli
 */
class TbRekammedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_rekammedis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_periksa', 'diagnosa', 'id_dokter', 'id_obat', 'id_pasien', 'id_poli'], 'required'],
            [['id_dokter', 'id_obat', 'id_pasien', 'id_poli'], 'integer'],
            [['tgl_periksa', 'diagnosa'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rm' => 'Id Rm',
            'tgl_periksa' => 'Tgl Periksa',
            'diagnosa' => 'Diagnosa',
            'id_dokter' => 'Id Dokter',
            'id_obat' => 'Id Obat',
            'id_pasien' => 'Id Pasien',
            'id_poli' => 'Id Poli',
        ];
    }
    public function getTbDokter()
    {
        return $this->hasOne(Tbdokter::className(), ['id_dokter' => 'id_dokter']);
    }

}
