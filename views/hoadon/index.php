<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HoadonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hoadons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hoadon-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hoadon', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_HD',
            'ID_KH',
            'ngaymua',
            'KhachHang_ID_KH',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
