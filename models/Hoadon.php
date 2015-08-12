<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hoadon".
 *
 * @property integer $ID_HD
 * @property integer $ID_KH
 * @property string $ngaymua
 * @property integer $KhachHang_ID_KH
 *
 * @property Khachhang $khachHangIDKH
 * @property Hoadonchitiet[] $hoadonchitiets
 */
class Hoadon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hoadon';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_HD', 'ID_KH', 'ngaymua', 'KhachHang_ID_KH'], 'required'],
            [['ID_HD', 'ID_KH', 'KhachHang_ID_KH'], 'integer'],
            [['ngaymua'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_HD' => 'Id  Hd',
            'ID_KH' => 'Id  Kh',
            'ngaymua' => 'Ngaymua',
            'KhachHang_ID_KH' => 'Khach Hang  Id  Kh',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKhachHangIDKH()
    {
        return $this->hasOne(Khachhang::className(), ['ID_KH' => 'KhachHang_ID_KH']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoadonchitiets()
    {
        return $this->hasMany(Hoadonchitiet::className(), ['HoaDon_ID_HD' => 'ID_HD']);
    }
}
