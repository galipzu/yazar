<?php

namespace backend\modules\yazar\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\yazar\models\Kitaplar;

/**
 * KitaplarSearch represents the model behind the search form about `backend\modules\yazar\models\Kitaplar`.
 */
class KitaplarSearch extends Kitaplar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'yazar', 'tur'], 'integer'],
            [['isim'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Kitaplar::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'yazar' => $this->yazar,
            'tur' => $this->tur,
        ]);

        $query->andFilterWhere(['like', 'isim', $this->isim]);

        return $dataProvider;
    }
}
