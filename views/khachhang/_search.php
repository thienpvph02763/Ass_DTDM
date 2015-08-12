<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KhachhangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khachhang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_KH') ?>

    <?= $form->field($model, 'Ten_KH') ?>

    <?= $form->field($model, 'SDT') ?>

    <?= $form->field($model, 'DiaChi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
