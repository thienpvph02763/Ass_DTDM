<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Khachhang */

$this->title = 'Update Khachhang: ' . ' ' . $model->ID_KH;
$this->params['breadcrumbs'][] = ['label' => 'Khachhangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_KH, 'url' => ['view', 'id' => $model->ID_KH]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="khachhang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
