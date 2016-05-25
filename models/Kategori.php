<?php

namespace backend\modules\yazar\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property integer $id
 * @property string $kategoriAdi
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kategoriAdi'], 'required'],
            [['kategoriAdi'], 'string', 'max' => 120]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kategoriAdi' => 'Kategori Adi',
        ];
    }
}
