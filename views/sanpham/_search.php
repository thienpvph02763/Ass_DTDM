<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SanphamSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sanpham-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_SP') ?>

    <?= $form->field($model, 'Ten_SP') ?>

    <?= $form->field($model, 'ID_LSP') ?>

    <?= $form->field($model, 'LoaiSanPham_ID_LSP') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
