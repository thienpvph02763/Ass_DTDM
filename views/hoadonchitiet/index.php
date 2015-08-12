<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HoadonchitietSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hoadonchitiets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hoadonchitiet-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hoadonchitiet', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_HDCT',
            'ID_HD',
            'ID_SP',
            'soluong',
            'HoaDon_ID_HD',
            // 'SanPham_ID_SP',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
