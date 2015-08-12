<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Hoadonchitiet */

$this->title = $model->ID_HDCT;
$this->params['breadcrumbs'][] = ['label' => 'Hoadonchitiets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hoadonchitiet-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_HDCT], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_HDCT], [
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
            'ID_HDCT',
            'ID_HD',
            'ID_SP',
            'soluong',
            'HoaDon_ID_HD',
            'SanPham_ID_SP',
        ],
    ]) ?>

</div>
