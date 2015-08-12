<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HoadonchitietSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hoadonchitiet-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_HDCT') ?>

    <?= $form->field($model, 'ID_HD') ?>

    <?= $form->field($model, 'ID_SP') ?>

    <?= $form->field($model, 'soluong') ?>

    <?= $form->field($model, 'HoaDon_ID_HD') ?>

    <?php // echo $form->field($model, 'SanPham_ID_SP') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
