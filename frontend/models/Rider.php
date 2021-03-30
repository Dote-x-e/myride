<?php

namespace frontend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "Rider".
 *
 * @property int $riderId
 * @property int $userId
 * @property int $phoneNumber
 */
class Rider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Rider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'phoneNumber'], 'required'],
            [['userId', 'phoneNumber'], 'integer'],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'riderId' => 'Rider ID',
            'userId' => 'User ID',
            'phoneNumber' => 'Phone Number',
        ];
    }
}
