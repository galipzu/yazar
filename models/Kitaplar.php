<?php

namespace backend\modules\yazar\models;

use Yii;

/**
 * This is the model class for table "kitaplar".
 *
 * @property integer $id
 * @property string $isim
 * @property integer $yazar
 * @property integer $tur
 */
class Kitaplar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kitaplar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['isim', 'yazar', 'tur'], 'required'],
            [['yazar', 'tur'], 'integer'],
            [['isim'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isim' => 'Isim',
            'yazar' => 'Yazar',
            'tur' => 'Tur',
        ];
    }
	
	/**
     * @return \yii\db\ActiveQuery
     */
    public function getYazars()
    {
        return $this->hasOne(Yazar::className(), ['id' => 'yazar']);
    }
}
