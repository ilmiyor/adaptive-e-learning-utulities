<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "lolog".
 *
 * @property int $uid
 * @property string $sto
 * @property string $uto
 */
class Lolog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lolog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uid'], 'required'],
            [['uid'], 'integer'],
            [['sto', 'uto'], 'string', 'max' => 45],
            [['uid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'sto' => 'Sto',
            'uto' => 'Uto',
        ];
    }
}
