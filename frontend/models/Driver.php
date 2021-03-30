<?php

namespace frontend\models;

use Yii;
use frontend\models\Rider;
use frontend\models\Cars;

/**
 * This is the model class for table "driver".
 *
 * @property int $driverId
 * @property int $riderId
 * @property int $carId
 *
 * @property Rider $rider
 * @property Cars $car
 * @property Rides[] $rides
 */
class Driver extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'driver';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['riderId', 'carId'], 'required'],
            [['riderId', 'carId'], 'integer'],
            [['riderId'], 'exist', 'skipOnError' => true, 'targetClass' => Rider::className(), 'targetAttribute' => ['riderId' => 'riderId']],
            [['carId'], 'exist', 'skipOnError' => true, 'targetClass' => Cars::className(), 'targetAttribute' => ['carId' => 'carId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'driverId' => 'Driver ID',
            'riderId' => 'Rider ID',
            'carId' => 'Car ID',
        ];
    }

    /**
     * Gets query for [[Rider]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRider()
    {
        return $this->hasOne(Rider::className(), ['riderId' => 'riderId']);
    }

    /**
     * Gets query for [[Car]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCar()
    {
        return $this->hasOne(Cars::className(), ['carId' => 'carId']);
    }

    /**
     * Gets query for [[Rides]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRides()
    {
        return $this->hasMany(Rides::className(), ['driverId' => 'driverId']);
    }
}
