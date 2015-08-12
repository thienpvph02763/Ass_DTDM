<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hoadonchitiet".
 *
 * @property integer $ID_HDCT
 * @property integer $ID_HD
 * @property integer $ID_SP
 * @property integer $soluong
 * @property integer $HoaDon_ID_HD
 * @property integer $SanPham_ID_SP
 *
 * @property Hoadon $hoaDonIDHD
 * @property Sanpham $sanPhamIDSP
 */
class Hoadonchitiet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hoadonchitiet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_HDCT', 'ID_HD', 'ID_SP', 'soluong', 'HoaDon_ID_HD', 'SanPham_ID_SP'], 'required'],
            [['ID_HDCT', 'ID_HD', 'ID_SP', 'soluong', 'HoaDon_ID_HD', 'SanPham_ID_SP'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_HDCT' => 'Id  Hdct',
            'ID_HD' => 'Id  Hd',
            'ID_SP' => 'Id  Sp',
            'soluong' => 'Soluong',
            'HoaDon_ID_HD' => 'Hoa Don  Id  Hd',
            'SanPham_ID_SP' => 'San Pham  Id  Sp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoaDonIDHD()
    {
        return $this->hasOne(Hoadon::className(), ['ID_HD' => 'HoaDon_ID_HD']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSanPhamIDSP()
    {
        return $this->hasOne(Sanpham::className(), ['ID_SP' => 'SanPham_ID_SP']);
    }
}
