<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sanpham;

/**
 * SanphamSearch represents the model behind the search form about `app\models\Sanpham`.
 */
class SanphamSearch extends Sanpham
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_SP', 'ID_LSP', 'LoaiSanPham_ID_LSP'], 'integer'],
            [['Ten_SP'], 'safe'],
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
        $query = Sanpham::find();

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
            'ID_SP' => $this->ID_SP,
            'ID_LSP' => $this->ID_LSP,
            'LoaiSanPham_ID_LSP' => $this->LoaiSanPham_ID_LSP,
        ]);

        $query->andFilterWhere(['like', 'Ten_SP', $this->Ten_SP]);

        return $dataProvider;
    }
}
