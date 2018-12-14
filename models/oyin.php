<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "oyin".
 *
 * @property int $idoyin
 * @property string $full_name
 * @property string $event
 * @property int $ar
 * @property int $si
 * @property int $vv
 * @property int $sg
 */
class Oyin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oyin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ar', 'si', 'vv', 'sg'], 'integer'],
            [['full_name', 'event'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idoyin' => 'Idoyin',
            'full_name' => 'Full Name',
            'event' => 'Event',
            'ar' => 'Ar',
            'si' => 'Si',
            'vv' => 'Vv',
            'sg' => 'Sg',
        ];
    }
}
