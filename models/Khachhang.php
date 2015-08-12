<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "khachhang".
 *
 * @property integer $ID_KH
 * @property string $Ten_KH
 * @property string $SDT
 * @property string $DiaChi
 *
 * @property Hoadon[] $hoadons
 */
class Khachhang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'khachhang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_KH', 'Ten_KH', 'SDT', 'DiaChi'], 'required'],
            [['ID_KH'], 'integer'],
            [['Ten_KH', 'SDT'], 'string', 'max' => 50],
            [['DiaChi'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_KH' => 'Id  Kh',
            'Ten_KH' => 'Ten  Kh',
            'SDT' => 'Sdt',
            'DiaChi' => 'Dia Chi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHoadons()
    {
        return $this->hasMany(Hoadon::className(), ['KhachHang_ID_KH' => 'ID_KH']);
    }
}
