<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "themecheck".
 *
 * @property int $uid
 * @property string $ctid
 * @property string $cl
 */
class Themecheck extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'themecheck';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uid'], 'required'],
            [['uid'], 'integer'],
            [['ctid', 'cl'], 'string', 'max' => 45],
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
            'ctid' => 'Ctid',
            'cl' => 'Cl',
        ];
    }
}
