<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Themes".
 *
 * @property int $id
 * @property string $name
 * @property int $subjectid
 */
class Themes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Themes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'subjectid'], 'required'],
            [['subjectid'], 'integer'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'subjectid' => 'Subjectid',
        ];
    }
}
