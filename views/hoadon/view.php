<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Hoadon */

$this->title = $model->ID_HD;
$this->params['breadcrumbs'][] = ['label' => 'Hoadons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hoadon-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_HD], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_HD], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_HD',
            'ID_KH',
            'ngaymua',
            'KhachHang_ID_KH',
        ],
    ]) ?>

</div>
