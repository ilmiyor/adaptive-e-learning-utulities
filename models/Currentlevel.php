<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "currentlevel".
 *
 * @property int $uid
 * @property int $sid
 * @property int $tid
 * @property int $tl
 * @property int $stid
 * @property int $stl
 * @property int $loid
 * @property int $mode
 */
class Currentlevel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'currentlevel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uid'], 'required'],
            [['uid', 'sid', 'tid', 'tl', 'stid', 'stl', 'loid', 'mode'], 'integer'],
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
            'sid' => 'Sid',
            'tid' => 'Tid',
            'tl' => 'Tl',
            'stid' => 'Stid',
            'stl' => 'Stl',
            'loid' => 'Loid',
            'mode' => 'Mode',
        ];
    }
}
