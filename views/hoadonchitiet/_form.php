<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hoadonchitiet */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hoadonchitiet-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_HDCT')->textInput() ?>

    <?= $form->field($model, 'ID_HD')->textInput() ?>

    <?= $form->field($model, 'ID_SP')->textInput() ?>

    <?= $form->field($model, 'soluong')->textInput() ?>

    <?= $form->field($model, 'HoaDon_ID_HD')->textInput() ?>

    <?= $form->field($model, 'SanPham_ID_SP')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
