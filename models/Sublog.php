<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sublog".
 *
 * @property int $id
 * @property int $uid
 * @property int $graderid
 * @property string $response
 * @property string $timecreated
 */
class Sublog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sublog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uid', 'graderid'], 'integer'],
            [['timecreated'], 'safe'],
            [['response'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uid' => 'Uid',
            'graderid' => 'Graderid',
            'response' => 'Response',
            'timecreated' => 'Timecreated',
        ];
    }
}
