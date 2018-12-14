<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "subthemecheck".
 *
 * @property int $uid
 * @property string $cstid
 * @property string $clv
 */
class Subthemecheck extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subthemecheck';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uid'], 'required'],
            [['uid'], 'integer'],
            [['cstid', 'clv'], 'string', 'max' => 45],
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
            'cstid' => 'Cstid',
            'clv' => 'Clv',
        ];
    }

    
}
