<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Hoadonchitiet;

/**
 * HoadonchitietSearch represents the model behind the search form about `app\models\Hoadonchitiet`.
 */
class HoadonchitietSearch extends Hoadonchitiet
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_HDCT', 'ID_HD', 'ID_SP', 'soluong', 'HoaDon_ID_HD', 'SanPham_ID_SP'], 'integer'],
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
        $query = Hoadonchitiet::find();

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
            'ID_HDCT' => $this->ID_HDCT,
            'ID_HD' => $this->ID_HD,
            'ID_SP' => $this->ID_SP,
            'soluong' => $this->soluong,
            'HoaDon_ID_HD' => $this->HoaDon_ID_HD,
            'SanPham_ID_SP' => $this->SanPham_ID_SP,
        ]);

        return $dataProvider;
    }
}
