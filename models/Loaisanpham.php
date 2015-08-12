<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "loaisanpham".
 *
 * @property integer $ID_LSP
 * @property string $TenLoai
 *
 * @property Sanpham[] $sanphams
 */
class Loaisanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loaisanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_LSP', 'TenLoai'], 'required'],
            [['ID_LSP'], 'integer'],
            [['TenLoai'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_LSP' => 'Id  Lsp',
            'TenLoai' => 'Ten Loai',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSanphams()
    {
        return $this->hasMany(Sanpham::className(), ['LoaiSanPham_ID_LSP' => 'ID_LSP']);
    }
}
