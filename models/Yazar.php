<?php

namespace backend\modules\yazar\models;

use Yii;

/**
 * This is the model class for table "yazar".
 *
 * @property integer $id
 * @property string $yazarAdiSoyadi
 */
class Yazar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yazar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['yazarAdiSoyadi'], 'required'],
            [['yazarAdiSoyadi'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'yazarAdiSoyadi' => 'Yazar Adi Soyadi',
        ];
    }
}
