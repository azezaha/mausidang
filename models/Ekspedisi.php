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
            [['origin', 'destination', 'courier', 'jenis', 'cost', 'durasi'], 'required'],
            [['origin', 'destination', 'durasi'], 'integer'],
            [['cost'], 'number'],
            [['courier'], 'string', 'max' => 11],
            [['jenis'], 'string', 'max' => 30],
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
        ];
    }
}
