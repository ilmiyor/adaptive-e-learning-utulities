<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "subjectcheck".
 *
 * @property int $uid
 * @property string $check
 */
class Subjectcheck extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subjectcheck';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uid'], 'required'],
            [['uid'], 'integer'],
            [['check'], 'string', 'max' => 45],
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
            'check' => 'Check',
        ];
    }
}
