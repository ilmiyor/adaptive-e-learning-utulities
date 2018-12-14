<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "new_table".
 *
 * @property int $idnew_table
 * @property resource $Variant
 * @property string $name
 * @property int $age
 * @property int $high
 */
class NewTable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'new_table';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idnew_table'], 'required'],
            [['idnew_table', 'age', 'high'], 'integer'],
            [['Variant'], 'string'],
            [['name'], 'string', 'max' => 45],
            [['idnew_table'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idnew_table' => 'Idnew Table',
            'Variant' => 'Variant',
            'name' => 'Name',
            'age' => 'Age',
            'high' => 'High',
        ];
    }
}
