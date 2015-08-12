<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Khachhang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khachhang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_KH')->textInput() ?>

    <?= $form->field($model, 'Ten_KH')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SDT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DiaChi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
