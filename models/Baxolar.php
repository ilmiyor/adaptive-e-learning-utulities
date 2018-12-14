<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "baxolar".
 *
 * @property int $id
 * @property string $misollar
 * @property string $userid
 * @property string $yaratilganvaqt
 * @property string $ozgartirilganvaqt
 * @property string $baxolovchi
 * @property string $baxo
 * @property string $urunishlarsoni
 */
class Baxolar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'baxolar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['misollar', 'userid', 'yaratilganvaqt', 'ozgartirilganvaqt', 'baxolovchi', 'baxo', 'urunishlarsoni'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'misollar' => 'Misollar',
            'userid' => 'Userid',
            'yaratilganvaqt' => 'Yaratilganvaqt',
            'ozgartirilganvaqt' => 'Ozgartirilganvaqt',
            'baxolovchi' => 'Baxolovchi',
            'baxo' => 'Baxo',
            'urunishlarsoni' => 'Urunishlarsoni',
        ];
    }
}
