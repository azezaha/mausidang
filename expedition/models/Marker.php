<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marker".
 *
 * @property int $id
 * @property string $kode
 * @property string $nama
 * @property string $alamat
 * @property double $lat
 * @property double $lng
 */
class Marker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'nama', 'alamat', 'lat', 'lng'], 'required'],
            [['alamat'], 'string'],
            [['lat', 'lng'], 'number'],
            [['kode'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'lat' => 'Lat',
            'lng' => 'Lng',
        ];
    }
}
