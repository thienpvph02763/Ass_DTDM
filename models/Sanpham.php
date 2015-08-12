<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sanpham".
 *
 * @property integer $ID_SP
 * @property string $Ten_SP
 * @property integer $ID_LSP
 * @property integer $LoaiSanPham_ID_LSP
 *
 * @property Hoadonchitiet[] $hoadonchitiets
 * @property Loaisanpham $loaiSanPhamIDLSP
 */
class Sanpham extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sanpham';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_SP', 'Ten_SP', 'ID_LSP', 'LoaiSanPham_ID_LSP'], 'required'],
            [['ID_SP', 'ID_LSP', 'LoaiSanPham_ID_LSP'], 'integer'],
            [['Ten_SP'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_SP' => 'Id  Sp',
            'Ten_SP' => 'Ten  Sp',
            'ID_LSP' => 'Id  Lsp',
            'LoaiSanPham_ID_LSP' => 'Loai San Pham  Id  Lsp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoadonchitiets()
    {
        return $this->hasMany(Hoadonchitiet::className(), ['SanPham_ID_SP' => 'ID_SP']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoaiSanPhamIDLSP()
    {
        return $this->hasOne(Loaisanpham::className(), ['ID_LSP' => 'LoaiSanPham_ID_LSP']);
    }
}
