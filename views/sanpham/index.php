<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SanphamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sanphams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanpham-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sanpham', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_SP',
            'Ten_SP',
            'ID_LSP',
            'LoaiSanPham_ID_LSP',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
