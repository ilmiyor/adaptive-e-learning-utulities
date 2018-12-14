<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "TempLOs".
 *
 * @property int $id
 * @property string $problemgiven
 * @property string $testtype
 * @property string $variant1
 * @property string $variant2
 * @property string $variant3
 * @property string $variant4
 * @property string $answer
 * @property string $definition
 * @property string $solve
 * @property int $weight
 * @property string $subthemeid
 */
class TempLOs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TempLOs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['weight'], 'integer'],
            [['subthemeid'], 'required'],
            [['problemgiven', 'definition', 'solve'], 'string', 'max' => 500],
            [['testtype', 'subthemeid'], 'string', 'max' => 45],
            [['variant1', 'variant2', 'variant3', 'variant4', 'answer'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'problemgiven' => 'Problemgiven',
            'testtype' => 'Testtype',
            'variant1' => 'Variant1',
            'variant2' => 'Variant2',
            'variant3' => 'Variant3',
            'variant4' => 'Variant4',
            'answer' => 'Answer',
            'definition' => 'Definition',
            'solve' => 'Solve',
            'weight' => 'Weight',
            'subthemeid' => 'Subthemeid',
        ];
    }
}
