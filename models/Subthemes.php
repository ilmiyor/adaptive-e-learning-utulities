<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Subthemes".
 *
 * @property int $id
 * @property string $name
 * @property int $qvalue
 * @property int $themeid
 */
class Subthemes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Subthemes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'themeid'], 'required'],
            [['qvalue', 'themeid'], 'integer'],
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
            'qvalue' => 'Qvalue',
            'themeid' => 'Themeid',
        ];
    }
}
