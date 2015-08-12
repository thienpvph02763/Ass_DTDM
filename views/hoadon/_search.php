<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HoadonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hoadon-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_HD') ?>

    <?= $form->field($model, 'ID_KH') ?>

    <?= $form->field($model, 'ngaymua') ?>

    <?= $form->field($model, 'KhachHang_ID_KH') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
