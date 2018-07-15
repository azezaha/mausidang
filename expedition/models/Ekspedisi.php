<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ekspedisi".
 *
 * @property int $id
 * @property int $origin
 * @property int $destination
 * @property string $courier
 * @property string $jenis
 * @property double $cost
 * @property int $durasi
 * @property string $packing
 * @property string $asuransi
 */
class Ekspedisi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ekspedisi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['origin', 'destination', 'courier', 'jenis', 'cost', 'durasi', 'packing', 'asuransi'], 'required'],
            [['origin', 'destination', 'durasi'], 'integer'],
            [['cost'], 'number'],
            [['courier'], 'string', 'max' => 11],
            [['jenis'], 'string', 'max' => 30],
            [['packing'], 'string', 'max' => 20],
            [['asuransi'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'origin' => 'Origin',
            'destination' => 'Destination',
            'courier' => 'Courier',
            'jenis' => 'Jenis',
            'cost' => 'Cost',
            'durasi' => 'Durasi',
            'packing' => 'Packing',
            'asuransi' => 'Asuransi',
        ];
    }
}
