<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "lastaccess".
 *
 * @property int $id
 * @property string $userid
 * @property string $courseid
 * @property string $themeid
 * @property string $subthemeid
 * @property string $timeaccess
 */
class Lastaccess extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lastaccess';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['timeaccess'], 'safe'],
            [['userid'], 'string', 'max' => 45],
            [['courseid', 'themeid', 'subthemeid'], 'string', 'max' => 100],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userid' => 'Userid',
            'courseid' => 'Courseid',
            'themeid' => 'Themeid',
            'subthemeid' => 'Subthemeid',
            'timeaccess' => 'Timeaccess',
        ];
    }
}
